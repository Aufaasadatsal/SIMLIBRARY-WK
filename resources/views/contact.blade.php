@extends('layouts.template')

@section('content')
<div class="px-40 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight min-w-72">Contact Us</p>
        </div>
        <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
            <div class="flex items-center gap-4">
                <div class="text-[#111418] flex items-center justify-center rounded-lg bg-[#f0f2f4] shrink-0 size-12" data-icon="MapPin" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path>
                    </svg>
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">(931) 648-5690</p>
                    <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur 16720</p>
                </div>
            </div>
            <div class="shrink-0">
                <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f0f2f4] text-[#111418] text-sm font-medium leading-normal w-fit">
                    <span class="truncate">Directions</span>
                </button>
            </div>
        </div>
        <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
            <div class="flex items-center gap-4">
                <div class="text-[#111418] flex items-center justify-center rounded-lg bg-[#f0f2f4] shrink-0 size-12" data-icon="EnvelopeOpen" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M228.44,89.34l-96-64a8,8,0,0,0-8.88,0l-96,64A8,8,0,0,0,24,96v96a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V96A8,8,0,0,0,228.44,89.34ZM128,37.76,206.4,88H49.6ZM40,104.65,120.45,160,40,215.35Zm176,110.7L135.55,160,216,104.65V208Z"></path>
                    </svg>
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Contact Our Staff</p>
                    <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Email us and we'll be happy to answer your questions.</p>
                </div>
            </div>
            <div class="shrink-0">
                <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f0f2f4] text-[#111418] text-sm font-medium leading-normal w-fit">
                    <span class="truncate">Email</span>
                </button>
            </div>
        </div>
        <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
            <div class="flex items-center gap-4">
                <div class="text-[#111418] flex items-center justify-center rounded-lg bg-[#f0f2f4] shrink-0 size-12" data-icon="PhoneCall" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M222.18,158.08l-48-21.37a16,16,0,0,0-15.6,1.17l-23,15.34a94.1,94.1,0,0,1-42.07-42.07l15.34-23a16,16,0,0,0,1.17-15.6l-21.37-48a16,16,0,0,0-18.07-9.09l-40,8.89A16,16,0,0,0,32,61.75c0,79.4,64.6,144,144,144a16,16,0,0,0,7.66-1.84l8.89-40A16,16,0,0,0,222.18,158.08ZM183.34,200c-68.66,0-124-55.34-124-124a2,2,0,0,1,1.61-2l39.95-8.88a1.94,1.94,0,0,1,.44-.05,2,2,0,0,1,1.83,1.19l21.37,48a2,2,0,0,1-.15,2l-15.34,23a8,8,0,0,0-.68,7.8,110.1,110.1,0,0,0,49.1,49.1,8,8,0,0,0,7.8-.68l23-15.34a2,2,0,0,1,2-.15l48,21.37a2,2,0,0,1,1.14,2.27l-8.88,39.95A2,2,0,0,1,183.34,200Z"></path>
                    </svg>
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Admissions</p>
                    <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Questions about attending Westwood High School?</p>
                </div>
            </div>
            <div class="shrink-0">
                <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f0f2f4] text-[#111418] text-sm font-medium leading-normal w-fit">
                    <span class="truncate">Call</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
