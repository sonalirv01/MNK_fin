<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', 0)->get();
        return view('admin-dashboard', compact('users'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'fund' => 'required|numeric|min:0.01|max:100000',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $userId = generateUniqueUserId();
        
        User::create([
            'user_id' => $userId,
            'name' => $request->name,
            'email' => $request->email,
            'wallet' => (float) $request->fund,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin-dashboard.index')->with('success', 'User added successfully');
    }

    public function transferView(Request $request)
    {
        $userId = $request->user_id;
        $users = User::select('name', 'email', 'user_id')->where('user_id', '!=', $userId)->where('is_admin', 0)->get();
        return view('admin.fund-transfer', compact('userId', 'users'));
    }

    public function transferFund(Request $request)
    {
        $request->validate([
            'transfer_to' => 'required',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $from = User::where('user_id', $request->transfer_from)->first();

        if (!$from) {
            return back()->withErrors(['transfer_from' => 'User not found.']);
        }

        $walletBalance = $from->wallet;
        $amount = $request->amount;

        if ($amount > $walletBalance) {
            return back()->withErrors(['amount' => 'The transfer amount cannot be greater than the users wallet balance.']);
        }

        $from->wallet -= $amount;
        $from->save();

        $to = User::where('user_id', $request->transfer_to)->first();
        if (!$to) {
            return back()->withErrors(['transfer_to' => 'Recipient user not found.']);
        }

        $to->wallet += $amount;
        $to->save();

        return redirect()->route('admin-dashboard.index')->with('success', 'Fund transferred successfully');
    }
}
