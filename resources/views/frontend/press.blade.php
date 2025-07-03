@extends('layouts.landing')
@section('content')
<main>
    <div class="bg-[#DFF8DE] py-24 px-4 text-center">
        <h2
            class="font-sora font-bold text-4xl md:text-[73.73px] leading-[90%] tracking-[0%] text-[#02611A]">
            Our News
        </h2>
        <p
            class="font sora font-normal text-[19px] leading-[26.6px] tracking-[0%] text-[#535353]">
            Updates on activities of the commission
        </p>
    </div>
    <section class="px-16 py-10 mx-auto max-w-7xl">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img
                    src="{{asset('/assets/images/Image.png')}}"
                    alt=""
                    class="object-cover w-full h-48 p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        E-Procurement Strategies
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Digital Procurement Insights
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt="icon-wrap"
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        What are the best practices for creating engaging e-procurement
                        presentations that captivate your team and impress stakeholders?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=1"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Jordan Smith</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >15 Mar 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img src="{{asset('/assets/images/Image.png')}}" alt="" class="p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        Sustainable Sourcing Techniques
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Eco-Friendly Procurement Practices
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt=""
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        How can organizations integrate sustainability into procurement to
                        reduce environmental impact while ensuring cost-effectiveness?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=2"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Alex Johnson</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >22 Apr 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img src="{{asset('/assets/images/Image.png')}}" alt="" class="p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        Supplier Relationship Management
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Building Strong Partnerships
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt="icon-wrap"
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        What strategies can be employed to enhance communication with suppliers
                        for improved supply chain efficiency?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=3"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Emily Davis</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >05 May 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Card 1 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img src="{{asset('/assets/images/Image.png')}}" alt="" class="p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        E-Procurement Strategies
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Digital Procurement Insights
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt="icon-wrap"
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        What are the best practices for creating engaging e-procurement
                        presentations that captivate your team and impress stakeholders?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=1"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Jordan Smith</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >15 Mar 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img src="{{asset('/assets/images/Image.png')}}" alt="" class="p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        Sustainable Sourcing Techniques
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Eco-Friendly Procurement Practices
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt="icon-wrap"
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        How can organizations integrate sustainability into procurement to
                        reduce environmental impact while ensuring cost-effectiveness?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=2"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Alex Johnson</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >22 Apr 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img src="{{asset('/assets/images/Image.png')}}" alt="" class="p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        Supplier Relationship Management
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Building Strong Partnerships
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt="icon-wrap"
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        What strategies can be employed to enhance communication with suppliers
                        for improved supply chain efficiency?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=3"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Emily Davis</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >05 May 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Card 1 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img src="{{asset('/assets/images/Image.png')}}" alt="" class="p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        E-Procurement Strategies
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Digital Procurement Insights
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt="icon-wrap"
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        What are the best practices for creating engaging e-procurement
                        presentations that captivate your team and impress stakeholders?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=1"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Jordan Smith</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >15 Mar 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img src="{{asset('/assets/images/Image.png')}}" alt="" class="p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        Sustainable Sourcing Techniques
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Eco-Friendly Procurement Practices
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt="icon-wrap"
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        How can organizations integrate sustainability into procurement to
                        reduce environmental impact while ensuring cost-effectiveness?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=2"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Alex Johnson</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >22 Apr 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="overflow-hidden bg-white shadow-sm">
                <img src="{{asset('/assets/images/Image.png')}}" alt="" class="p-3" />
                <div class="p-5 space-y-2">
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#02611A]">
                        Supplier Relationship Management
                    </p>
                    <div class="flex items-center justify-between">
                        <h3
                            class="font-sora font-bold text-[23px] leading-[120%] tracking-[0%] text-[#101828]">
                            Building Strong Partnerships
                        </h3>
                        <span class="text-lg text-gray-500"
                            ><img src="{{asset('/assets/images/Icon wrap.png')}}" alt="icon-wrap"
                        /></span>
                    </div>
                    <p
                        class="font-jaka font-normal text-[16px] leading-[22.4px] tracking-[0%] text-[#667085]">
                        What strategies can be employed to enhance communication with suppliers
                        for improved supply chain efficiency?
                    </p>
                    <div class="flex items-center gap-2 pt-4">
                        <img
                            src="https://i.pravatar.cc/30?img=3"
                            class="w-6 h-6 rounded-full"
                            alt="" />
                        <span
                            class="font-jaka font-bold text-[13px] leading-[120%] tracking-[0%] text-[#232323]"
                            >Emily Davis</span
                        >
                        <span
                            class="font-jaka font-normal text-[13px] leading-[120%] tracking-[0%] text-[#667085] ml-auto"
                            >05 May 2023</span
                        >
                    </div>
                </div>
            </div>

            <!-- Add 6 more cards similarly... -->
            <!-- Use different images or avatars for better variety -->
        </div>

        <!-- Load More Button -->
        <div class="flex justify-center mt-10">
            <button
                class="flex items-center gap-2 px-5 py-3 border-[1px] bg-[#D0FFDC] text-[#02611A] rounded-[8px] text-[16px] font-inter font-medium leading-[24px] tracking-normal hover:bg-green-300 transition">
                <img src="{{asset('/assets/images/Icon.png')}}" alt="Icon" class="w-4 h-4" />
                <span>Load more</span>
            </button>
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