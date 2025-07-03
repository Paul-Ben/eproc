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
                src="{{asset('/assets/images/frame4.png')}}"
                class="object-cover object-center w-full h-full" />
        </div>
    </section>

    <section class="min-h-screen bg-gray-50">
        <div class="px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="mb-2 text-3xl font-bold text-gray-900">All Awards</h1>
                <p class="text-gray-600">Stay informed on the most recent open tender</p>
            </div>

            <!-- Table Container -->
            <div
                class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="border-b border-gray-200 bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-4 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                    S/N
                                </th>
                                <th
                                    class="px-6 py-4 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Project
                                </th>
                                <th
                                    class="px-6 py-4 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Location
                                </th>
                                <th
                                    class="px-6 py-4 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Year
                                </th>
                                <th
                                    class="px-6 py-4 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Ministry
                                </th>
                                <th
                                    class="px-6 py-4 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Contractor
                                </th>
                                <th
                                    class="px-6 py-4 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Amount (₦)
                                </th>
                                <th
                                    class="px-6 py-4 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">1</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">2</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">3</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">4</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">5</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">6</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">7</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">8</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">9</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">10</td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <div class="flex items-center">
                                        <span>Maintenance of internal roads...</span>
                                        <button
                                            class="ml-2 font-medium text-green-600 hover:text-green-800">
                                            more
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Makurdi
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    2022
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Works & Transport
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    Privent Nig. Ltd
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    47,251,000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-medium rounded-full status-awarded">
                                        Awarded
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-center mt-6 space-x-2">
                <button
                    class="flex items-center px-3 py-2 text-sm text-gray-500 hover:text-gray-700 disabled:opacity-50 disabled:cursor-not-allowed"
                    disabled>
                    <svg
                        class="w-4 h-4 mr-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Previous
                </button>

                <button class="px-3 py-2 text-sm text-white bg-blue-600 rounded-md">
                    1
                </button>
                <button
                    class="px-3 py-2 text-sm text-gray-700 rounded-md hover:bg-gray-100">
                    2
                </button>
                <button
                    class="px-3 py-2 text-sm text-gray-700 rounded-md hover:bg-gray-100">
                    3
                </button>
                <span class="px-3 py-2 text-sm text-gray-500">...</span>
                <button
                    class="px-3 py-2 text-sm text-gray-700 rounded-md hover:bg-gray-100">
                    8
                </button>
                <button
                    class="px-3 py-2 text-sm text-gray-700 rounded-md hover:bg-gray-100">
                    9
                </button>
                <button
                    class="px-3 py-2 text-sm text-gray-700 rounded-md hover:bg-gray-100">
                    10
                </button>

                <button
                    class="flex items-center px-3 py-2 text-sm text-gray-700 hover:text-gray-900">
                    Next
                    <svg
                        class="w-4 h-4 ml-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            // Add click functionality to "more" buttons
            document.querySelectorAll("button").forEach((button) => {
                if (button.textContent.trim() === "more") {
                    button.addEventListener("click", function () {
                        alert("View more details about this project")
                    })
                }
            })

            // Add pagination functionality
            document.querySelectorAll("[data-page]").forEach((button) => {
                button.addEventListener("click", function () {
                    // Remove active class from all buttons
                    document.querySelectorAll("[data-page]").forEach((btn) => {
                        btn.classList.remove("bg-blue-600", "text-white")
                        btn.classList.add("text-gray-700", "hover:bg-gray-100")
                    })

                    // Add active class to clicked button
                    this.classList.add("bg-blue-600", "text-white")
                    this.classList.remove("text-gray-700", "hover:bg-gray-100")
                })
            })
        </script>
    </section>
    <!-- Join our community section -->
    <section
        class="flex items-center justify-center min-h-screen p-4 bg-green-50">
        <div
            class="relative flex items-center w-full max-w-5xl px-8 py-10 text-white bg-green-800 rounded-xl">
            <!-- Absolutely Positioned Image -->
            <div class="absolute bottom-0 right-6 md:block">
                <img
                    src="{{('/assets/images/contractor.png')}}"
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
