<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (Auth::check())
                        <p>Welcome Admin, {{ Auth::user()->name }}!</p><br>

                        {{-- Display all users with usertype 'user' --}}
                        @php
                            $users = App\Models\User::where('usertype', 'user')->get();
                        @endphp

                        @if ($users->count() > 0)
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th class="w-1/3 py-2 px-4">Name</th>
                                        <th class="w-1/3 py-2 px-4">Email</th>
                                        <th class="w-1/3 py-2 px-4">Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="w-1/3 py-2 px-4">{{ $user->name }}</td>
                                            <td class="w-1/3 py-2 px-4">{{ $user->email }}</td>
                                            <td class="w-1/3 py-2 px-4">{{ $user->phone }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No users with usertype 'user' found.</p>
                        @endif

                        {{-- Display other user details as before --}}
                        <!-- ... -->

                    @else
                        <p>You're not logged in.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
