<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Wikrama</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Be+Vietnam+Pro%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body>
    @extends('layouts.template')

    @section('content')
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <div class="@container">
                    <div class="@[480px]:p-4">
                        <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-start justify-end px-4 pb-10 @[480px]:px-10" style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://cdn.usegalileo.ai/sdxl10/f86c42ec-7a1f-476f-a0c4-3e3591a3bd55.png");'>
                            <div class="flex flex-col gap-2 text-left">
                                <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">Welcome to the school library</h1>
                                <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">We provide a wide range of books and other materials to help students and teachers with their research and reading needs.</h2>
                            </div>
                            <label class="flex flex-col min-w-40 h-14 w-full max-w-[480px] @[480px]:h-16">
                                <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                                    <div class="text-[#4e7297] flex border border-[#d0dbe7] bg-slate-50 items-center justify-center pl-[15px] rounded-l-xl border-r-0" data-icon="MagnifyingGlass" data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                            <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                                        </svg>
                                    </div>
                                    <input placeholder="Search for books, authors, or topics" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0e141b] focus:outline-0 focus:ring-0 border border-[#d0dbe7] bg-slate-50 focus:border-[#d0dbe7] h-full placeholder:text-[#4e7297] px-[15px] rounded-r-none border-r-0 pr-2 rounded-l-none border-l-0 pl-2 text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal" value="" />
                                    <div class="flex items-center justify-center rounded-r-xl border-l-0 border border-[#d0dbe7] bg-slate-50 pr-[7px]">
                                        <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#197ce6] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]">
                                            <span class="truncate">Search</span>
                                        </button>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-4 p-4">
                    <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#d0dbe7]">
                        <p class="text-[#0e141b] text-base font-medium leading-normal">Most active student</p>
                        <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">Yazid Wiliadi</p>
                    </div>
                    <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#d0dbe7]">
                        <p class="text-[#0e141b] text-base font-medium leading-normal">Most active class</p>
                        <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">PPLG XII-1</p>
                    </div>
                    <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#d0dbe7]">
                        <p class="text-[#0e141b] text-base font-medium leading-normal">Most read book</p>
                        <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">Laskar Pelangi</p>
                    </div>
                </div>
                <h2 class="text-[#0e141b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">New Arrivals</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/c587ae31-c0b4-4924-b6d6-8a187ae4f999.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">The Secret Garden</p>
                  <p class="text-[#4e7297] text-sm font-normal leading-normal">Frances Hodgson Burnett</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/d22963c1-acf6-424f-aee9-82627f30963c.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">The Hobbit</p>
                  <p class="text-[#4e7297] text-sm font-normal leading-normal">J.R.R. Tolkien</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/0ccf2517-5638-4d6b-8c81-91f52805e2ab.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">The Outsiders</p>
                  <p class="text-[#4e7297] text-sm font-normal leading-normal">S.E. Hinton</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/bcf1c595-5573-4111-a9b0-7c81c85c685b.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">To Kill a Mockingbird</p>
                  <p class="text-[#4e7297] text-sm font-normal leading-normal">Harper Lee</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/c26781ab-33d1-4bfb-bf14-9233b3bb309f.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">The Giver</p>
                  <p class="text-[#4e7297] text-sm font-normal leading-normal">Lois Lowry</p>
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
        <footer class="px-10 py-3 border-t border-solid border-t-[#e7edf3]">
            <div class="flex justify-between items-center">
                <p class="text-sm text-[#0e141b]">© 2023 Perpustakaan Wikrama. All rights reserved.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="text-sm text-[#0e141b]">Privacy Policy</a>
                    <a href="#" class="text-sm text-[#0e141b]">Terms of Service</a>
                </div>
            </div>
        </footer>
    @endsection
</body>
</html>
