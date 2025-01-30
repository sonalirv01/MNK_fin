<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transfer ') . $userId }} Fund
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Fund Transfer</h3>
                    <form id="transferForm" action="{{ route('fund.transfer') }}" method="POST">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label for="transfer_from_display" class="block text-sm font-medium text-gray-700">Transfer From</label>
                                <div id="transfer_from_display" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100">
                                    {{ $userId }}
                                </div>

                                <input type="hidden" id="transfer_from" name="transfer_from" value="{{ $userId }}">

                                @error('transfer_from') <span class="text-danger text-xs">{{ $message }}</span> @enderror
                            </div>


                            <div>
                                <label for="transfer_to" class="block text-sm font-medium text-gray-700">Transfer To</label>
                                <select id="transfer_to" name="transfer_to" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                                    <option value="" selected disabled>Select a User</option>
                                    @foreach($users as $user)
                                    <option value="{{ $user->user_id }}">{{ $user->name }} ({{ $user->user_id }})</option>
                                    @endforeach
                                </select>
                                @error('transfer_to') <span class="text-danger text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                                <input type="amount" id="amount" name="amount" value="{{ old('amount') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                                @error('amount') <span class="text-danger text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="flex justify-end">
                                <button type="button" id="transferBtn" class="btn btn-primary px-4 py-2 bg-blue-500 rounded-md mt-3">Transfer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>