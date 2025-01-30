<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Hello Admin, you're logged in!") }}
                </div>

                <!-- Add New User Button -->
                <div class="p-6">
                    <a href="{{ route('user.create') }}" class="btn btn-primary px-4 py-2 bg-blue-500 rounded-md mb-4 inline-block">
                        Add New User
                    </a>

                    <!-- Users Table -->
                    <h3 class="text-lg font-semibold">User List</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto" style="width:100%">
                            <thead>
                                <tr class="bg-gray-100 border-b">
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">#</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Account No</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Name</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Email</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Wallet</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Created At</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-center text-sm text-gray-800">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2 text-center text-sm text-gray-800">{{ $user->user_id }}</td>
                                    <td class="px-4 py-2 text-center text-sm text-gray-800">{{ $user->name }}</td>
                                    <td class="px-4 py-2 text-center text-sm text-gray-800">{{ $user->email }}</td>
                                    <td class="px-4 py-2 text-center text-sm text-gray-800">${{ $user->wallet }}</td>
                                    <td class="px-4 py-2 text-center text-sm text-gray-800">{{ $user->created_at->format('d/m/Y') }}</td>
                                    <td class="px-4 py-2 text-center text-sm text-gray-800">
                                        <a href="{{ route('fund.view', ['user_id' => $user->user_id]) }}" class="px-4 py-2 bg-blue-500 rounded-md mb-4 inline-block">
                                        <button type="submit" class="btn btn-primary text-red-500">Fund Transfer</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>