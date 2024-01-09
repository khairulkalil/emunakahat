<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (Auth::check())
                    <p>Welcome, {{ Auth::user()->name }}!</p><br>
                    <table class="table-auto">
                        <tbody>
                            <tr>
                                <td class="font-bold">Name: </td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">IC:</td>
                                <td>{{ Auth::user()->icNumber }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Status</td>
                                <td>{{ Auth::user()->maritalStatus }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Email:</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Telefon</td>
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Alamat</td>
                                <td>{{ Auth::user()->currentAddress }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Pekerjaan</td>
                                <td>{{ Auth::user()->job }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">No. Kerja</td>
                                <td>{{ Auth::user()->jobPhone }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Alamat Kerja</td>
                                <td>{{ Auth::user()->jobAddress }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Taraf Pendidikan</td>
                                <td>{{ Auth::user()->education }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Bangsa</td>
                                <td>{{ Auth::user()->race }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Warganegara</td>
                                <td>{{ Auth::user()->nationality }}</td>
                            </tr>
                        </tbody>
                    </table>


                    @else
                        <p>You're not logged in.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
