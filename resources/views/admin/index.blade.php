@extends('layouts.app')

@section('content')
<div class="grid grid-cols-3 gap-4">
    <div class="bg-gray-700 p-4 rounded">
        <div class="flex items-center">
            <div class="w-12 h-12 bg-white text-black rounded-full flex items-center justify-center">
                <i class="fas fa-users"></i>
            </div>
            <div class="ml-4">
                <p>Total Pengunjung</p>
                <p class="text-xl font-bold">100</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-700 p-4 rounded">
        <div class="flex items-center">
            <div class="w-12 h-12 bg-white text-black rounded-full flex items-center justify-center">
                <i class="fas fa-user"></i>
            </div>
            <div class="ml-4">
                <p>Pengunjung</p>
                <p class="text-xl font-bold">1</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-700 p-4 rounded">
        <div class="flex items-center">
            <div class="w-12 h-12 bg-white text-black rounded-full flex items-center justify-center">
                <i class="fas fa-globe"></i>
            </div>
            <div class="ml-4">
                <p>Artikel</p>
                <p class="text-xl font-bold">1</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-700 p-4 rounded">
        <div class="flex items-center">
            <div class="w-12 h-12 bg-white text-black rounded-full flex items-center justify-center">
                <i class="fas fa-globe"></i>
            </div>
            <div class="ml-4">
                <p>Total Artikel</p>
                <p class="text-xl font-bold">1</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-700 p-4 rounded">
        <div class="flex items-center">
            <div class="w-12 h-12 bg-white text-black rounded-full flex items-center justify-center">
                <i class="fas fa-thumbs-up"></i>
            </div>
            <div class="ml-4">
                <p>Rayon Teraktif</p>
                <p class="text-xl font-bold">Cisarua 6</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-700 p-4 rounded">
        <div class="flex items-center">
            <div class="w-12 h-12 bg-white text-black rounded-full flex items-center justify-center">
                <i class="fas fa-thumbs-up"></i>
            </div>
            <div class="ml-4">
                <p>Siswa Teraktif</p>
                <p class="text-xl font-bold">John Doe</p>
            </div>
        </div>
    </div>
</div>
@endsection
