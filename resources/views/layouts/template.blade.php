<!-- layouts/template.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Wikrama')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Be+Vietnam+Pro%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
        .mobile-menu { display: none; }
        @media (max-width: 1024px) {
            .mobile-menu { display: block; }
            .desktop-menu { display: none; }
        }
    </style>
    <script>
        function toggleFlyout() {
            document.getElementById('flyoutMenu').classList.toggle('hidden');
        }
    </script>
</head>
<body class="relative">
    <!-- Navbar Section -->
    @section('navbar')
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf3] px-4 py-3 lg:px-10">
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Wikrama" class="h-8 w-auto lg:h-10" />
                    <p class="text-[#0e141b] text-base font-bold leading-normal ml-2 lg:text-lg">Perpustakaan Wikrama</p>
                </a>
            </div>
            <div class="desktop-menu flex flex-1 justify-end gap-4 lg:gap-8">
                <div class="flex items-center gap-4 lg:gap-9">
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="profile">Profile</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="information">Information</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="opac">OPAC</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="contact">Contact</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="download">Download</a>
                    <a class="text-[#0e141b] text-sm font-medium leading-normal" href="ebook">eBook</a>
                </div>
            </div>
            <div>
                <button class="flex items-center justify-center gap-2 h-10 px-3 rounded-xl bg-[#e7edf3] text-[#0e141b] text-sm font-bold leading-normal tracking-[0.015em]">
                    <div class="text-[#0e141b]" data-icon="User" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
                        </svg>
                <div class="relative">
                    <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#e7edf3] text-[#0e141b] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
                        onclick="toggleFlyout()">
                        <div class="text-[#0e141b]" data-icon="User" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
                            </svg>
                        </div>
                    </button>

                    <!-- Flyout Menu -->
                    <div id="flyoutMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                        <div class="px-4 py-3">
                            <p class="text-sm text-gray-900">John Doe</p>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <a href="login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Login</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu flex items-center lg:hidden">
                <button id="hamburger-button" class="focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#0e141b]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </header>
        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu-dropdown" class="hidden absolute bg-white w-full border-t border-solid border-t-[#e7edf3]">
            <div class="flex flex-col items-start px-4 py-2">
                <a class="w-full py-2 text-[#0e141b] text-sm font-medium leading-normal" href="profile">Profile</a>
                <a class="w-full py-2 text-[#0e141b] text-sm font-medium leading-normal" href="information">Information</a>
                <a class="w-full py-2 text-[#0e141b] text-sm font-medium leading-normal" href="opac">OPAC</a>
                <a class="w-full py-2 text-[#0e141b] text-sm font-medium leading-normal" href="contact">Contact</a>
                <a class="w-full py-2 text-[#0e141b] text-sm font-medium leading-normal" href="download">Download</a>
                <a class="w-full py-2 text-[#0e141b] text-sm font-medium leading-normal" href="ebook">eBook</a>
            </div>
        </div>
    @show

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        @yield('footer')
    </footer>

    <script>
        document.getElementById('hamburger-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu-dropdown');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
