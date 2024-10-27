@extends('layouts.template')

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-[#FBF8EF] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
  <div class="layout-container flex h-full grow flex-col">
    <div class="px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex p-4 @container">
          <div class="flex w-full flex-col gap-4 @[520px]:flex-row @[520px]:justify-between @[520px]:items-center">
            <div class="flex gap-4">
              <div
                class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32"
                style='background-image: url("https://cdn.usegalileo.ai/stability/c1f16476-b870-4ec2-8501-d660d507616a.png");'
              ></div>
              <div class="flex flex-col justify-center">
                <p class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em]">The Library</p>
                <p class="text-[#A07D1C] text-base font-normal leading-normal">
                  A public library in the heart of the city, offering a comprehensive collection of books and resources
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="pb-3">
          <div class="flex border-b border-[#EFE3C3] px-4 justify-between">
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#FAC638] text-[#201A09] pb-[13px] pt-4 flex-1" href="#">
              <p class="text-[#201A09] text-sm font-bold leading-normal tracking-[0.015em]">History</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Vision &amp; Mission</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Our Portfolio</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Organisational Structure</p>
            </a>
          </div>
        </div>
        <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">History</h2>
        <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
          The Library has been serving the city since 1973, with its main branch located at 1000 Main Street. It was established through a partnership between the city
          government and a group of local philanthropists. Over the years, the library has expanded its services to include digital resources, maker spaces, and community
          programs. The Library is committed to providing equitable access to knowledge and fostering a love of learning in the community.
        </p>
        <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Vision &amp; Mission</h2>
        <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
          Our vision is a city where every resident has the tools they need to learn, create, and grow. Our mission is to provide free and open access to information,
          resources, and opportunities that inspire curiosity, build skills, and enrich lives.
        </p>
        <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Portfolio</h2>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
          <div class="flex flex-col gap-3 pb-3">
            <div
              class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/3b0257ad-4962-46a8-a671-65f6c27a7c9e.png");'
            ></div>
            <div>
              <p class="text-[#201A09] text-base font-medium leading-normal">Main Branch</p>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">1000 Main Street</p>
            </div>
          </div>
          <div class="flex flex-col gap-3 pb-3">
            <div
              class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/c1762990-992e-4a1d-9e90-a05d52ad6db2.png");'
            ></div>
            <div>
              <p class="text-[#201A09] text-base font-medium leading-normal">Digital Resources</p>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">E-books, audiobooks, databases, and more</p>
            </div>
          </div>
          <div class="flex flex-col gap-3 pb-3">
            <div
              class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/e4d638d1-bbf2-4869-a3dd-8157f0e7dc14.png");'
            ></div>
            <div>
              <p class="text-[#201A09] text-base font-medium leading-normal">Community Programs</p>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">Storytimes, book clubs, workshops, and events</p>
            </div>
          </div>
          <div class="flex flex-col gap-3 pb-3">
            <div
              class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/c0c7ebdd-2978-47dc-99f1-a41d00f1a87c.png");'
            ></div>
            <div>
              <p class="text-[#201A09] text-base font-medium leading-normal">Maker Spaces</p>
              <p class="text-[#A07D1C] text-sm font-normal leading-normal">3D printers, laser cutters, sewing machines, and more</p>
            </div>
          </div>
        </div>
        <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Organisational Structure</h2>
        <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
          The Library is governed by a board of directors, which is responsible for setting policies, managing finances, and hiring the library director. The library director
          oversees the day-to-day operations of the library, including staff management, program development, and collection management. The library has a team of professional
          librarians, paraprofessional staff, and volunteers who work together to provide excellent service to the community.
        </p>
      </div>
    </div>
  </div>
</div> 
@endsection