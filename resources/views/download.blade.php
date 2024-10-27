@extends('layouts.template')

@section('content')
<div class="px-40 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
      <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight min-w-72">Downloads</p></div>
      <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Guides</h3>
      <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
        <div class="flex items-center gap-4">
          <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
            style='background-image: url("https://cdn.usegalileo.ai/stability/d1521492-75b2-4549-80aa-097b5660dcad.png");'
          ></div>
          <div class="flex flex-col justify-center">
            <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Library 101</p>
            <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Learn the basics of using the library</p>
          </div>
        </div>
        <div class="shrink-0">
          <div class="text-[#111418] flex size-7 items-center justify-center" data-icon="Download" data-size="24px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path
                d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"
              ></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
        <div class="flex items-center gap-4">
          <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
            style='background-image: url("https://cdn.usegalileo.ai/stability/e9115611-93c9-4431-b446-1ee40ae7dd92.png");'
          ></div>
          <div class="flex flex-col justify-center">
            <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Research Quick Start Guide</p>
            <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">A quick guide to help you get started with your research</p>
          </div>
        </div>
        <div class="shrink-0">
          <div class="text-[#111418] flex size-7 items-center justify-center" data-icon="Download" data-size="24px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path
                d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"
              ></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
        <div class="flex items-center gap-4">
          <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
            style='background-image: url("https://cdn.usegalileo.ai/stability/ac67aaad-1087-4c16-9ec8-9caaeec2e456.png");'
          ></div>
          <div class="flex flex-col justify-center">
            <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">How to Use the Library</p>
            <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">A step-by-step guide to help you find and use library resources</p>
          </div>
        </div>
        <div class="shrink-0">
          <div class="text-[#111418] flex size-7 items-center justify-center" data-icon="Download" data-size="24px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path
                d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"
              ></path>
            </svg>
          </div>
        </div>
      </div>
      <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Forms and Policies</h3>
      <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
        <div class="flex items-center gap-4">
          <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
            style='background-image: url("https://cdn.usegalileo.ai/stability/e785d2f8-bad3-454c-9336-5466d4f6dfd1.png");'
          ></div>
          <div class="flex flex-col justify-center">
            <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Collection Development Request Form</p>
            <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Submit this form to request a new book or journal</p>
          </div>
        </div>
        <div class="shrink-0">
          <div class="text-[#111418] flex size-7 items-center justify-center" data-icon="Download" data-size="24px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path
                d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"
              ></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
        <div class="flex items-center gap-4">
          <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
            style='background-image: url("https://cdn.usegalileo.ai/stability/a231bef1-1537-4ab1-849c-46d7dfab1e58.png");'
          ></div>
          <div class="flex flex-col justify-center">
            <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Library Policy Manual</p>
            <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">A list of all library policies and procedures</p>
          </div>
        </div>
        <div class="shrink-0">
          <div class="text-[#111418] flex size-7 items-center justify-center" data-icon="Download" data-size="24px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path
                d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"
              ></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
        <div class="flex items-center gap-4">
          <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
            style='background-image: url("https://cdn.usegalileo.ai/stability/2beee341-a9e5-4499-8314-484844361b69.png");'
          ></div>
          <div class="flex flex-col justify-center">
            <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Interlibrary Loan Request Form</p>
            <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Use this form to request an item from another library</p>
          </div>
        </div>
        <div class="shrink-0">
          <div class="text-[#111418] flex size-7 items-center justify-center" data-icon="Download" data-size="24px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path
                d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"
              ></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection