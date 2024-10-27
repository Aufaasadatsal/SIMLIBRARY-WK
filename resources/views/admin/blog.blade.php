@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Previous</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded">1</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded">2</button>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
                </div>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search..." class="border rounded px-2 py-1">
                    <div class="flex items-center space-x-2">
                        <img src="/api/placeholder/32/32" alt="User" class="w-8 h-8 rounded-full">
                        <span>Bro jeki</span>
                    </div>
                </div>
            </header>

            <!-- Content Table -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-4">
                <table class="w-full bg-white shadow-md rounded">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">No</th>
                            <th class="py-3 px-6 text-left">Judul</th>
                            <th class="py-3 px-6 text-left">Isi</th>
                            <th class="py-3 px-6 text-center">Gambar</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @for ($i = 1; $i <= 3; $i++)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $i }}</td>
                            <td class="py-3 px-6 text-left">Judul {{ $i }}</td>
                            <td class="py-3 px-6 text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mattis sapien erat, vitae tincidunt erat lobortis a.</td>
                            <td class="py-3 px-6 text-center">
                                <img src="{{ asset('images/mentahan.jpg') }}" alt="Content Image" class="w-auto h-auto mx-auto">
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Aktif</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded text-xs">Lihat</button>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </main>
        </div>
    </div>
@endsection