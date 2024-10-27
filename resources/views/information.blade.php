@extends('layouts.template')

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-[#FBF8EF] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
  <div class="layout-container flex h-full grow flex-col">
    <div class="px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="@container">
          <div class="@[480px]:p-4">
            <div
              class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4"
              style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://cdn.usegalileo.ai/sdxl10/daec9a40-808c-439c-8b11-101d6f4f3d4e.png");'
            >
              <div class="flex flex-col gap-2 text-center">
                <h1
                  class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                >
                  Welcome to the Library
                </h1>
                <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                  Explore our collections, services and facilities
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="pb-3">
          <div class="flex border-b border-[#EFE3C3] px-4 gap-8">
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#FAC638] text-[#201A09] pb-[13px] pt-4" href="#">
              <p class="text-[#201A09] text-sm font-bold leading-normal tracking-[0.015em]">About</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Services</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Facilities</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Opening Hours</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Membership</p>
            </a>
          </div>
        </div>
        <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">About the Library</h2>
        <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
          The library offers a wide range of services to support students and faculty in their research and educational needs. The library has a collection of over 400,000
          volumes and provides access to thousands of electronic resources, including e-books, e-journals, databases, and more. Our friendly and knowledgeable staff is here to
          help you with your information needs. Whether you need help finding a book, using a database, or citing your sources, we are here to help.
        </p>
        <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Services</h2>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
          <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
            <div class="text-[#201A09]" data-icon="Book" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M208,24H72A32,32,0,0,0,40,56V224a8,8,0,0,0,8,8H192a8,8,0,0,0,0-16H56a16,16,0,0,1,16-16H208a8,8,0,0,0,8-8V32A8,8,0,0,0,208,24Zm-8,160H72a31.82,31.82,0,0,0-16,4.29V56A16,16,0,0,1,72,40H200Z"
                ></path>
              </svg>
            </div>
            <div class="flex flex-col gap-1">
              <h2 class="text-[#201A09] text-base font-bold leading-tight">Borrowing</h2>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">Learn about borrowing policies and how to get materials from other libraries</p>
            </div>
          </div>
          <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
            <div class="text-[#201A09]" data-icon="Bookmark" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,16V161.57l-51.77-32.35a8,8,0,0,0-8.48,0L72,161.56V48ZM132.23,177.22a8,8,0,0,0-8.48,0L72,209.57V180.43l56-35,56,35v29.14Z"
                ></path>
              </svg>
            </div>
            <div class="flex flex-col gap-1">
              <h2 class="text-[#201A09] text-base font-bold leading-tight">Course Reserves</h2>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">Find textbooks and other course materials for your classes</p>
            </div>
          </div>
          <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
            <div class="text-[#201A09]" data-icon="Database" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M128,24C74.17,24,32,48.6,32,80v96c0,31.4,42.17,56,96,56s96-24.6,96-56V80C224,48.6,181.83,24,128,24Zm80,104c0,9.62-7.88,19.43-21.61,26.92C170.93,163.35,150.19,168,128,168s-42.93-4.65-58.39-13.08C55.88,147.43,48,137.62,48,128V111.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64ZM69.61,53.08C85.07,44.65,105.81,40,128,40s42.93,4.65,58.39,13.08C200.12,60.57,208,70.38,208,80s-7.88,19.43-21.61,26.92C170.93,115.35,150.19,120,128,120s-42.93-4.65-58.39-13.08C55.88,99.43,48,89.62,48,80S55.88,60.57,69.61,53.08ZM186.39,202.92C170.93,211.35,150.19,216,128,216s-42.93-4.65-58.39-13.08C55.88,195.43,48,185.62,48,176V159.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64V176C208,185.62,200.12,195.43,186.39,202.92Z"
                ></path>
              </svg>
            </div>
            <div class="flex flex-col gap-1">
              <h2 class="text-[#201A09] text-base font-bold leading-tight">Databases</h2>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">Access our collection of electronic resources, including e-books, e-journals, and databases</p>
            </div>
          </div>
          <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
            <div class="text-[#201A09]" data-icon="FileArchive" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H112V200h8a8,8,0,0,0,0-16h-8V168h8a8,8,0,0,0,0-16h-8V136h8a8,8,0,0,0,0-16h-8v-8a8,8,0,0,0-16,0v8H88a8,8,0,0,0,0,16h8v16H88a8,8,0,0,0,0,16h8v16H88a8,8,0,0,0,0,16h8v16H56V40h88V88a8,8,0,0,0,8,8h48V216Z"
                ></path>
              </svg>
            </div>
            <div class="flex flex-col gap-1">
              <h2 class="text-[#201A09] text-base font-bold leading-tight">Interlibrary Loan</h2>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">Request books and articles from other libraries</p>
            </div>
          </div>
          <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
            <div class="text-[#201A09]" data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                ></path>
              </svg>
            </div>
            <div class="flex flex-col gap-1">
              <h2 class="text-[#201A09] text-base font-bold leading-tight">Research Help</h2>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">Get help with your research, including finding sources, using databases, and citing your work</p>
            </div>
          </div>
          <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
            <div class="text-[#201A09]" data-icon="ChatCircle" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"
                ></path>
              </svg>
            </div>
            <div class="flex flex-col gap-1">
              <h2 class="text-[#201A09] text-base font-bold leading-tight">Ask a Librarian</h2>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">Chat with a librarian for quick questions or research help</p>
            </div>
          </div>
          <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
            <div class="text-[#201A09]" data-icon="CheckCircle" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"
                ></path>
              </svg>
            </div>
            <div class="flex flex-col gap-1">
              <h2 class="text-[#201A09] text-base font-bold leading-tight">FAQ</h2>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">Find answers to common questions about the library's services and resources</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>    
@endsection
