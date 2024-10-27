<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body class="bg-gray-800 text-white">
    <div class="flex">
        <div class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h1 class="text-2xl font-bold">WIKRAMA</h1>
            </div>
            <nav class="mt-4">
                <a href="/admin" class="block py-2 px-4 hover:bg-gray-700">Dashboard</a>
                <a href="/admin/blog" class="block py-2 px-4 bg-gray-700">Blog</a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700">Galeri</a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700">Profile</a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700">Users</a>
            </nav>
        </div>
        <div class="w-5/6 p-6">
            <header class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Dashboard</h2>
                <div class="flex items-center">
                    <span class="mr-4">Bro_Jeki</span>
                    <img src="{{ asset('profile.jpg') }}" alt="Profile" class="w-10 h-10 rounded-full">
                </div>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
