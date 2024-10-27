@extends('layouts.template')

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-[#f8f9fc] group/design-root overflow-x-hidden" style='font-family: Lexend, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
          <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#0e121b] tracking-light text-[32px] font-bold leading-tight min-w-72">eBooks</p></div>
          <div class="px-4 py-3">
            <label class="flex flex-col min-w-40 h-12 w-full">
              <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                <div
                  class="text-[#4e6597] flex border-none bg-[#e7ebf3] items-center justify-center pl-4 rounded-l-xl border-r-0"
                  data-icon="MagnifyingGlass"
                  data-size="24px"
                  data-weight="regular"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                    ></path>
                  </svg>
                </div>
                <input
                  placeholder="Search eBooks"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0e121b] focus:outline-0 focus:ring-0 border-none bg-[#e7ebf3] focus:border-none h-full placeholder:text-[#4e6597] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                  value=""
                />
              </div>
            </label>
          </div>
          <h2 class="text-[#0e121b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">eBook Categories</h2>
          <div class="flex gap-3 p-3 flex-wrap pr-4">
            <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-[#e7ebf3] pl-4 pr-4">
              <p class="text-[#0e121b] text-sm font-medium leading-normal">All</p>
            </div>
            <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-[#e7ebf3] pl-4 pr-4">
              <p class="text-[#0e121b] text-sm font-medium leading-normal">Biography &amp; Memoir</p>
            </div>
            <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-[#e7ebf3] pl-4 pr-4">
              <p class="text-[#0e121b] text-sm font-medium leading-normal">Business &amp; Finance</p>
            </div>
            <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-[#e7ebf3] pl-4 pr-4">
              <p class="text-[#0e121b] text-sm font-medium leading-normal">Cooking</p>
            </div>
            <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-[#e7ebf3] pl-4 pr-4">
              <p class="text-[#0e121b] text-sm font-medium leading-normal">Education</p>
            </div>
            <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-[#e7ebf3] pl-4 pr-4">
              <p class="text-[#0e121b] text-sm font-medium leading-normal">Fiction &amp; Literature</p>
            </div>
            <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-[#e7ebf3] pl-4 pr-4">
              <p class="text-[#0e121b] text-sm font-medium leading-normal">Health &amp; Wellness</p>
            </div>
            <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-[#e7ebf3] pl-4 pr-4">
              <p class="text-[#0e121b] text-sm font-medium leading-normal">History</p>
            </div>
          </div>
          <h2 class="text-[#0e121b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Popular eBooks</h2>
          <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/45b7eb40-b9f0-4c60-be8f-87db55b4adbf.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">The 7 Habits of Highly Effective People</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Stephen R. Covey</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/f00dbb34-51c7-4a71-98a2-dc12ba546b39.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">Educated: A Memoir</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Tara Westover</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/49aac2b2-749a-48b6-ac97-524648f7c4fd.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">The Four Agreements</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Don Miguel Ruiz</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/f1272293-294a-48e2-8551-14fae9a133d5.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">Sapiens: A Brief History of Humankind</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Yuval Noah Harari</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/5f33d5c7-04f1-4c1a-9f8e-8a8f6bb59b37.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">Becoming</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Michelle Obama</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/db4e438d-9273-4d1c-9d36-0a4889907839.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">The Alchemist</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Paulo Coelho</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/84d1443b-cded-4862-9e3e-756e0333a1ff.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">The Subtle Art of Not Giving a F*ck</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Mark Manson</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/e800e61a-3572-48f2-a1d8-0477ca1f1f5d.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">Educated: A Memoir</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Tara Westover</p>
              </div>
            </div>
          </div>
          <h2 class="text-[#0e121b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">New Arrivals</h2>
          <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/ff0bda86-2705-4772-93d5-67a3db704e7a.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">The 7 Habits of Highly Effective People</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Stephen R. Covey</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/5f7a1ce9-3219-478f-ba04-3d72fa332053.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">Educated: A Memoir</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Tara Westover</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/2ebb48be-77d1-49e3-a173-96894277ed31.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">The Four Agreements</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Don Miguel Ruiz</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/72f9549e-c606-4095-bda5-e7c08fd00c37.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">Sapiens: A Brief History of Humankind</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Yuval Noah Harari</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/5f7dad30-2066-41fc-a044-5022b8cc5988.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">Becoming</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Michelle Obama</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/42c45ecf-3dd3-43d9-adf6-9c6a849ef06c.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">The Alchemist</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Paulo Coelho</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/bad439a7-acf6-4a05-8d05-300ef2b12e70.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">The Subtle Art of Not Giving a F*ck</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Mark Manson</p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                style='background-image: url("https://cdn.usegalileo.ai/stability/01d598b3-52fc-4576-a734-07766c6869ac.png");'
              ></div>
              <div>
                <p class="text-[#0e121b] text-base font-medium leading-normal">Educated: A Memoir</p>
                <p class="text-[#4e6597] text-sm font-normal leading-normal">Tara Westover</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <footer class="flex justify-center">
        <div class="flex max-w-[960px] flex-1 flex-col">
          <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
            <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
              <a class="text-[#4e6597] text-base font-normal leading-normal min-w-40" href="#">Privacy Policy</a>
              <a class="text-[#4e6597] text-base font-normal leading-normal min-w-40" href="#">Terms of Use</a>
              <a class="text-[#4e6597] text-base font-normal leading-normal min-w-40" href="#">Accessibility</a>
              <a class="text-[#4e6597] text-base font-normal leading-normal min-w-40" href="#">Nondiscrimination Notice</a>
            </div>
            <p class="text-[#4e6597] text-base font-normal leading-normal">2022 University of California San Francisco</p>
          </footer>
        </div>
      </footer> --}}
    </div>
  </div>
@endsection
