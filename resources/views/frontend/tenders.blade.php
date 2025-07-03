@extends('layouts.landing')
@section('content')
<main>
    <!-- recent tenders -->
    <section class="px-6 py-16">
        <div class="max-w-6xl mx-auto">
            <div class="grid items-start gap-12 lg:grid-cols-2">
                <!-- Left Content -->
                <div>
                    <h2
                        class="text-3xl md:text-[33px] font-sora leading-[120%] tracking-[0%] text-[#232323] font-semibold mb-6">
                        <span class="text-[#949494]">Open Tenders:</span>
                        <span class=""
                            >Opportunities <br />
                            for Transparent Partnership</span
                        >
                    </h2>

                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#232323] mb-8">
                        We are committed to fair, competitive, and transparent procurement.
                        Here, you'll find active tender opportunities published by the Benua
                        State Public Procurement Commission. Each tender aligns with the values
                        of value- for-money, inclusivity, and accountability.
                    </p>
                </div>

                <!-- Right Content -->
                <div>
                    <h3
                        class="font-sora font-bold text-[19px] leading-[26.6px] tracking-[0%] mb-3">
                        Why Participate?
                    </h3>

                    <ul class="space-y-1">
                        <li
                            class="flex items-start font-jaka font-normal text-[16px] leading-[24.4px] text-[#232323] tracking-[0%]">
                            <div
                                class="flex-shrink-0 w-2 h-2 mt-2 mr-4 bg-black rounded-full"></div>
                            <span>Equal access to government contracts</span>
                        </li>
                        <li
                            class="flex items-start font-jaka font-normal text-[16px] leading-[24.4px] text-[#232323] tracking-[0%]">
                            <div
                                class="flex-shrink-0 w-2 h-2 mt-2 mr-4 bg-black rounded-full"></div>
                            <span>Clear evaluation criteria</span>
                        </li>
                        <li
                            class="flex items-start font-jaka font-normal text-[16px] leading-[24.4px] text-[#232323] tracking-[0%]">
                            <div
                                class="flex-shrink-0 w-2 h-2 mt-2 mr-4 bg-black rounded-full"></div>
                            <span>Real-time updates and notifications</span>
                        </li>
                        <li
                            class="flex items-start font-jaka font-normal text-[16px] leading-[24.4px] text-[#232323] tracking-[0%]">
                            <div
                                class="flex-shrink-0 w-2 h-2 mt-2 mr-4 bg-black rounded-full"></div>
                            <span
                                >Opportunities across multiple sectors: construction, ICT, healthcare,
                                education, and more</span
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- image -->
    <section class="">
        <!-- Full Width Banner Image -->
        <div class="h-64 max-w-6xl mx-auto overflow-hidden md:h-80 lg:h-96">
            <img
                src="../assets/images/frame4.png"
                class="object-cover object-center w-full h-full" />
        </div>
    </section>

    <section class="max-w-6xl px-4 py-10 mx-auto">
        <h2 class="text-3xl font-bold text-[#232323] mb-2">Open Tenders</h2>
        <p class="text-[#535353] text-base mb-6">
            Stay informed on the most recent open tender
        </p>

        <!-- Tender List Container -->
        <div id="tender-list" class="space-y-6"></div>

        <!-- Pagination UI -->
        <div id="pagination" class="flex justify-center mt-10 space-x-2"></div>
    </section>

    <!-- Join our community section -->
    <section
        class="flex items-center justify-center min-h-screen p-4 bg-green-50">
        <div
            class="relative flex items-center w-full max-w-5xl px-8 py-10 text-white bg-green-800 rounded-xl">
            <!-- Absolutely Positioned Image -->
            <div class="absolute bottom-0 right-6 md:block">
                <img
                    src="../assets/images/contractor.png"
                    alt="Contractor"
                    class="w-auto h-96" />
                <!-- Replace the image src with your own -->
            </div>

            <!-- Text Content -->
            <div class="z-10 md:w-2/3">
                <h2
                    class="text-2xl font-sora md:text-[33px] leading-[120%] tracking-normal font-normal mb-4">
                    Join our community of<br />
                    trusted contractors and suppliers.
                </h2>
                <p
                    class="text-sm font-sora md:text-[19px] text-[#F4F4F4] leading-[26.6px] tracking-[0%] mb-6 max-w-md">
                    Gain instant access to verified opportunities, transparent procurement
                    processes, and real-time updates — all in one place.
                </p>
                <a
                    href="#"
                    class="inline-block px-4 py-2 font-semibold text-green-700 transition bg-white rounded-full hover:bg-green-100">
                    Get started →
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
