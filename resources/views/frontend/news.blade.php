@extends('layouts.landing')
@section('content')
<main>
    <section class="font-sans text-black bg-white">
        <!-- Handshake Image -->

        <!-- Text Section -->
        <div class="container px-6 py-12 mx-auto space-y-8 md:px-20">
            <div class="max-w-3xl mx-auto">
                <div>
                    <!-- Back link -->
                    <div class="mb-3">
                        <a
                            href="#"
                            class="inline-flex items-center text-[#02611A] hover:text-green-900 transition-colors duration-200 leading-[28px] tracking-[-0.2%] font-poppins text-base font-semibold">
                            <svg
                                class="w-4 h-4 mr-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back
                        </a>
                    </div>

                    <!-- Main heading -->
                    <h1
                        class="text-2xl md:text-[48px] font-bold font-sora text-[#101828] mb-3 leading-[120%] tracking-normal">
                        Building Strong Partnerships
                    </h1>

                    <!-- Author and date -->
                    <div
                        class="flex items-center font-jaka font-normal leading-[18.6px] text-[14px] tracking-normal text-[#02611A]">
                        <span>Alec Whitten</span>
                        <span class="mx-2">•</span>
                        <span>17 Jan 2022</span>
                    </div>
                </div>
            </div>
            <div class="max-w-3xl mx-auto text-justify">
                <img
                    src="{{asset('/assets/images/partnership.png')}}"
                    alt="Handshake"
                    class="object-contain w-full h-auto" />
            </div>
            <div class="max-w-3xl mx-auto space-y-4 text-justify">
                <p
                    class="font-poppins font-normal text-base leading-[26px] tracking-normal text-[#292929]">
                    The organization will serve as a crucial partner in fostering digital
                    connectivity, driving economic development, improving public services,
                    and closing the digital gap throughout the state. By collaborating
                    closely with government MDAs, we aim to successfully implement projects
                    that benefit the community.
                </p>

                <p
                    class="font-poppins font-normal text-base leading-[26px] tracking-normal text-[#292929]">
                    <span class="font-semibold text-black"
                        >Building Strong Partnerships: A Guide for Contractors and Government
                        MDAs</span
                    ><br />
                    The organization will serve as a crucial partner in fostering digital
                    connectivity, driving economic development, improving public services,
                    and closing the digital gap throughout the state. By collaborating
                    closely with government MDAs, we aim to successfully implement projects
                    that benefit the community.
                </p>

                <p
                    class="font-poppins font-normal text-base leading-[26px] tracking-normal text-[#292929]">
                    The organization will serve as a crucial partner in fostering digital
                    connectivity, driving economic development, improving public services,
                    and closing the digital gap throughout the state. By collaborating
                    closely with government MDAs, we aim to successfully implement projects
                    that benefit the community.
                </p>

                <p
                    class="font-poppins font-normal text-base leading-[26px] tracking-normal text-[#292929]">
                    <span class="font-semibold text-black"
                        >Building Strong Partnerships: A Guide for Contractors and Government
                        MDAs</span
                    ><br />
                    The organization will serve as a crucial partner in fostering digital
                    connectivity, driving economic development, improving public services,
                    and closing the digital gap throughout the state. By collaborating
                    closely with government MDAs, we aim to successfully implement projects
                    that benefit the community.
                </p>

                <p
                    class="font-poppins font-normal text-base leading-[26px] tracking-normal text-[#292929]">
                    The organization will serve as a crucial partner in fostering digital
                    connectivity, driving economic development, improving public services,
                    and closing the digital gap throughout the state. By collaborating
                    closely with government MDAs, we aim to successfully implement projects
                    that benefit the community.
                </p>

                <p
                    class="font-poppins font-normal text-base leading-[26px] tracking-normal text-[#292929]">
                    <span class="font-semibold text-black">Migrating to Linear 101</span
                    ><br />
                    The company will act as the backbone for digital connectivity,
                    facilitating economic growth, enhancing public services, and bridging the
                    digital divide across the state. The company will act as the backbone for
                    digital connectivity, facilitating economic growth, enhancing public
                    services, and bridging the digital divide across the state.
                </p>

                <p>
                    The company will act as the backbone for digital connectivity,
                    facilitating economic growth, enhancing public services, and bridging the
                    digital divide across the state. The company will act as the backbone for
                    digital connectivity, facilitating economic growth, enhancing public
                    services, and bridging the digital divide across the state.
                </p>
            </div>

            <div class="px-6 py-10 text-black bg-white md:px-20">
                <h2 class="mb-6 text-lg font-semibold">Similar news</h2>

                <!-- Card Grid -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Card 1 -->
                    <div class="flex overflow-hidden bg-white rounded-lg shadow-md">
                        <img
                            src="{{asset('/assets/images/image 3.png')}}"
                            alt="News"
                            class="object-cover w-24 h-auto" />
                        <div class="p-3 flex flex-col flex-1 w-[350px]">
                            <div class="space-y-2">
                                <p
                                    class="font-jaka font-semibold text-[12px] leading-[18.6px] tracking-[0%] text-[#02611A]">
                                    Alec Whitten • 17 Jan 2022
                                </p>
                                <div class="flex items-start justify-between gap-2">
                                    <h3
                                        class="font-sora font-normal text-[16px] leading-tight tracking-[0%] text-[#101828] whitespace-nowrap">
                                        Bill Walsh leadership <br />
                                        lessons
                                    </h3>
                                    <span class="text-sm text-gray-500 shrink-0">
                                        <img
                                            src="{{asset('/assets/images/Icon wrap.png')}}"
                                            class="w-4 h-4"
                                            alt="icon-wrap" />
                                    </span>
                                </div>
                                <p
                                    class="font-inter font-normal text-[14.88px] leading-[20px] tracking-[0%] text-[#667085] mt-1">
                                    Like to know the secrets of transforming a 2–14 team into a 3x Super
                                    Bowl winning Dynasty?
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex overflow-hidden bg-white rounded-lg shadow-md">
                        <img
                            src="{{asset('/assets/images/image 3.png')}}"
                            alt="News"
                            class="object-cover w-24 h-auto" />
                        <div class="p-3 flex flex-col flex-1 w-[350px]">
                            <div class="space-y-2">
                                <p
                                    class="font-jaka font-semibold text-[12px] leading-[18.6px] tracking-[0%] text-[#02611A]">
                                    Alec Whitten • 17 Jan 2022
                                </p>
                                <div class="flex items-start justify-between gap-2">
                                    <h3
                                        class="font-sora font-normal text-[16px] leading-tight tracking-[0%] text-[#101828] whitespace-nowrap">
                                        Bill Walsh leadership <br />
                                        lessons
                                    </h3>
                                    <span class="text-sm text-gray-500 shrink-0">
                                        <img
                                            src="{{asset('/assets/images/Icon wrap.png')}}"
                                            class="w-4 h-4"
                                            alt="icon-wrap" />
                                    </span>
                                </div>
                                <p
                                    class="font-inter font-normal text-[14.88px] leading-[20px] tracking-[0%] text-[#667085] mt-1">
                                    Like to know the secrets of transforming a 2–14 team into a 3x Super
                                    Bowl winning Dynasty?
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex overflow-hidden bg-white rounded-lg shadow-md">
                        <img
                            src="{{asset('/assets/images/image 3.png')}}"
                            alt="News"
                            class="object-cover w-24 h-auto" />
                        <div class="p-3 flex flex-col flex-1 w-[350px]">
                            <div class="space-y-2">
                                <p
                                    class="font-jaka font-semibold text-[12px] leading-[18.6px] tracking-[0%] text-[#02611A]">
                                    Alec Whitten • 17 Jan 2022
                                </p>
                                <div class="flex items-start justify-between gap-2">
                                    <h3
                                        class="font-sora font-normal text-[16px] leading-tight tracking-[0%] text-[#101828] whitespace-nowrap">
                                        Bill Walsh leadership <br />
                                        lessons
                                    </h3>
                                    <span class="text-sm text-gray-500 shrink-0">
                                        <img
                                            src="{{asset('/assets/images/Icon wrap.png')}}"
                                            class="w-4 h-4"
                                            alt="icon-wrap" />
                                    </span>
                                </div>
                                <p
                                    class="font-inter font-normal text-[14.88px] leading-[20px] tracking-[0%] text-[#667085] mt-1">
                                    Like to know the secrets of transforming a 2–14 team into a 3x Super
                                    Bowl winning Dynasty?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Join our community section -->
<section
    class="flex items-center justify-center min-h-screen p-4 bg-green-50">
    <div
        class="relative flex items-center w-full max-w-5xl px-8 py-10 text-white bg-green-800 rounded-xl">
        <!-- Absolutely Positioned Image -->
        <div class="absolute bottom-0 right-6 md:block">
            <img
                src="{{asset('/assets/images/contractor.png')}}"
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
@endsection
