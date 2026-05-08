<x-app-layout>

    <!-- HERO -->
    <section
        class="relative overflow-hidden min-h-screen flex flex-col justify-center items-center text-center px-6 py-16 bg-gradient-to-b from-white via-pink-50 to-white">

        <!-- BACKGROUND BLUR -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-pink-200/30 blur-3xl rounded-full">
        </div>

        <!-- CONTENT -->
        <div class="relative z-10 max-w-5xl mx-auto">

            <!-- LOGO -->
            <div class="flex justify-center mb-6">

                <div
                    class="w-24 h-24 md:w-32 md:h-32 rounded-3xl bg-white shadow-xl border border-pink-100 flex items-center justify-center p-4">

                    <img src="{{ asset('images/logo.png') }}" alt="LIKHA-UGC Logo" class="w-full h-full object-contain">

                </div>

            </div>

            <!-- BADGE -->
            <div
                class="inline-flex items-center gap-2 bg-pink-100 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-6 shadow-sm">

                ✨ Filipino UGC Creator Portfolio Builder

            </div>

            <!-- HEADLINE -->
            <h1
                class="text-4xl sm:text-5xl lg:text-7xl font-extrabold leading-tight tracking-tight text-gray-900 max-w-4xl mx-auto">

                Create Your Professional

                <span class="block bg-gradient-to-r from-pink-500 to-fuchsia-600 bg-clip-text text-transparent">

                    UGC Portfolio

                </span>

            </h1>

            <!-- SUBTEXT -->
            <p class="mt-6 text-lg sm:text-xl md:text-2xl font-semibold text-gray-700 leading-relaxed">

                Likhang Pinoy,
                <span class="text-primary">
                    Para sa UGC Creators
                </span>

            </p>

            <p class="mt-4 text-gray-500 text-sm sm:text-base md:text-lg max-w-2xl mx-auto leading-relaxed">

                Build a stunning portfolio that helps brands discover your content,
                showcase your creativity, and unlock paid collaborations faster.

            </p>

            <!-- BUTTONS -->
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">

                <!-- PRIMARY -->
                <a href="{{ route('lets-start-step-1') }}"
                    class="group inline-flex items-center justify-center bg-primary hover:bg-pink-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 min-w-[220px]">

                    🚀 Let’s Start

                </a>

                <!-- SECONDARY -->
                {{-- <a href="#"
                    class="inline-flex items-center justify-center border border-pink-200 bg-white hover:bg-primary hover:text-white text-primary px-8 py-4 rounded-2xl text-lg font-semibold shadow-sm hover:shadow-lg transition-all duration-300 min-w-[220px]">

                    👀 View Demo

                </a> --}}

            </div>

            <!-- STATS -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-4xl mx-auto">

                <!-- ITEM -->
                <div
                    class="flex items-center gap-4 bg-white/70 backdrop-blur border border-pink-100 rounded-2xl px-5 py-5 shadow-sm hover:shadow-md transition-all duration-300">

                    <!-- ICON -->
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-pink-100 text-lg shrink-0">

                        ⚡

                    </div>

                    <!-- TEXT -->
                    <div class="text-left">

                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            5-10 Min
                        </h3>

                        <p class="text-xs sm:text-sm text-gray-500 leading-relaxed mt-1">
                            Fast portfolio setup
                        </p>

                    </div>

                </div>

                <!-- ITEM -->
                <div
                    class="flex items-center gap-4 bg-white/70 backdrop-blur border border-pink-100 rounded-2xl px-5 py-5 shadow-sm hover:shadow-md transition-all duration-300">

                    <!-- ICON -->
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-blue-100 text-lg shrink-0">

                        📱

                    </div>

                    <!-- TEXT -->
                    <div class="text-left">

                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            Mobile Ready
                        </h3>

                        <p class="text-xs sm:text-sm text-gray-500 leading-relaxed mt-1">
                            Optimized for all devices
                        </p>

                    </div>

                </div>

                <!-- ITEM -->
                <div
                    class="flex items-center gap-4 bg-white/70 backdrop-blur border border-pink-100 rounded-2xl px-5 py-5 shadow-sm hover:shadow-md transition-all duration-300">

                    <!-- ICON -->
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-purple-100 text-lg shrink-0">

                        🎨

                    </div>

                    <!-- TEXT -->
                    <div class="text-left">

                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            Creator Focused
                        </h3>

                        <p class="text-xs sm:text-sm text-gray-500 leading-relaxed mt-1">
                            Built for UGC creators
                        </p>

                    </div>

                </div>

            </div>

            <!-- POWERED BY -->
            <div class="mt-16 flex flex-col items-center">

                <!-- LABEL -->
                <div class="flex items-center gap-4 w-full max-w-md mb-6">

                    <div class="flex-1 h-px bg-gray-200"></div>

                    <p class="text-xs uppercase tracking-[0.3em] text-gray-400 font-semibold">
                        Powered By
                    </p>

                    <div class="flex-1 h-px bg-gray-200"></div>

                </div>

                <!-- LOGOS -->
                <div
                    class="flex flex-wrap items-center justify-center gap-10 bg-white/70 backdrop-blur px-8 py-5 rounded-3xl border border-pink-100 shadow-sm">

                    <img src="{{ asset('images/laravel-logo.png') }}"
                        class="h-8 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">

                    <img src="{{ asset('images/vercel-logo.png') }}"
                        class="h-8 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">

                    <img src="{{ asset('images/logo.png') }}"
                        class="h-8 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300">


                </div>

            </div>

        </div>

    </section>

</x-app-layout>
