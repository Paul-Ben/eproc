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
                src="{{asset('assets/images/frame4.png')}}"
                class="object-cover object-center w-full h-full" />
        </div>
    </section>
    <section class="px-6 py-16">
        <div class="max-w-6xl mx-auto">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <!-- Left Content -->
                <div class="space-y-12">
                    <div>
                        <h2 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl">
                            What we stand for
                        </h2>
                        <p class="text-lg text-gray-600">
                            Step by step direction on how to bid for tenders
                        </p>
                    </div>

                    <!-- Vision Section -->
                    <div class="relative flex items-start space-x-6">
                        <div class="relative z-10 flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-12 h-12 bg-green-100 border-4 border-white rounded-full shadow-lg">
                                <svg
                                    class="w-6 h-6 text-green-800"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <!-- Connecting line -->
                            <div
                                class="absolute top-12 left-1/2 transform -translate-x-1/2 w-0.5 h-32 bg-green-300"></div>
                        </div>
                        <div>
                            <h3 class="mb-4 text-2xl font-bold text-gray-900">Vision</h3>
                            <p class="leading-relaxed text-gray-600">
                                To ensure efficiency service delivery that significantly impacts on
                                the lives of the people by ensuring that available resources for
                                procurement are effectively harnessed and deployed.
                            </p>
                        </div>
                    </div>

                    <!-- Mission Section -->
                    <div class="flex items-start space-x-6">
                        <div class="relative z-10 flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-12 h-12 bg-green-100 border-4 border-white rounded-full shadow-lg">
                                <svg
                                    class="w-6 h-6 text-green-800"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-4 text-2xl font-bold text-gray-900">Mission</h3>
                            <p class="leading-relaxed text-gray-600">
                                A agency responsible for the monitoring and oversight of public
                                procurement, harmonizing the existing government policies and
                                practices by regulating, setting standards and developing the
                                professional capacity of public procurement in the state.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="relative">
                    <div class="overflow-hidden shadow-xl rounded-2xl">
                        <img
                            src="{{asset('assets/images/image 2.png')}}"
                            alt="Three professionals in safety vests shaking hands at a construction site"
                            class="w-full h-96 lg:h-[500px] object-cover" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-6 py-16">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 md:text-4xl">
                    Our Objectives
                </h2>
                <p class="max-w-2xl mx-auto text-gray-600">
                    Transforming the Way You Do Business, Ensuring Quality and Excellence
                </p>
            </div>

            <!-- Objectives Cards -->
            <div class="grid gap-8 md:grid-cols-3">
                <!-- Integrity Card -->
                <div
                    class="p-8 transition-shadow duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                    <div class="mb-6">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-green-100 rounded-full">
                            <svg
                                class="w-6 h-6 text-green-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="mb-4 text-xl font-bold text-gray-900">Integrity</h3>
                    <p class="leading-relaxed text-gray-600">
                        We uphold the highest ethical standards in all our operations, promoting
                        trust and accountability in the procurement ecosystem.
                    </p>
                </div>

                <!-- Innovation Card -->
                <div
                    class="p-8 transition-shadow duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                    <div class="mb-6">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-green-100 rounded-full">
                            <svg
                                class="w-6 h-6 text-green-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="mb-4 text-xl font-bold text-gray-900">Innovation</h3>
                    <p class="leading-relaxed text-gray-600">
                        We are focused on developing innovative solutions that streamline
                        processes, aiming to revolutionize clients' experience with real-time
                        solutions.
                    </p>
                </div>

                <!-- Customer-Centric Card -->
                <div
                    class="p-8 transition-shadow duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                    <div class="mb-6">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-green-100 rounded-full">
                            <svg
                                class="w-6 h-6 text-green-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="mb-4 text-xl font-bold text-gray-900">Customer-Centric</h3>
                    <p class="leading-relaxed text-gray-600">
                        Our clients' success is our top priority. We work tirelessly to
                        understand their unique needs and provide them with tailored solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Join our community section -->
    <section
        class="flex items-center justify-center min-h-screen p-4 bg-green-50">
        <div
            class="relative flex items-center w-full max-w-5xl px-8 py-10 text-white bg-green-800 rounded-xl">
            <!-- Absolutely Positioned Image -->
            <div class="absolute bottom-0 right-6 md:block">
                <img
                    src="..{{asset('/assets/images/contractor.png')}}"
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