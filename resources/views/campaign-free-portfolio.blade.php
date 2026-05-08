{{-- resources/views/campaign-free-portfolio.blade.php --}}

<x-app-layout>

    <div class="p-3 sm:px-6 lg:px-8">

        <div class="max-w-4xl mx-auto">

            <div class="bg-white shadow-sm rounded-lg overflow-hidden">

                {{-- HERO --}}
                <div
                    class="relative overflow-hidden bg-gradient-to-br from-pink-500 via-fuchsia-500 to-purple-600 px-6 py-14 text-center">

                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute -top-10 -left-10 w-40 h-40 bg-white rounded-full"></div>
                        <div class="absolute bottom-0 right-0 w-52 h-52 bg-white rounded-full"></div>
                    </div>

                    <div class="relative z-10">

                        <div
                            class="inline-flex items-center gap-2 bg-white/20 backdrop-blur px-4 py-2 rounded-full text-white text-sm font-medium mb-5">
                            ✨ Limited Creator Campaign
                        </div>

                        <h1 class="text-3xl sm:text-5xl font-bold text-white leading-tight">
                            Become One of the 5 Selected
                            <span class="block">
                                LIKHA-UGC Creators
                            </span>
                        </h1>

                        <p class="mt-5 text-white/90 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
                            Complete the campaign tasks below and get a chance to receive
                            a FREE professional UGC portfolio to help grow your creator brand.
                        </p>

                    </div>

                </div>

                {{-- CONTENT --}}
                <div class="p-4 sm:p-6">

                    {{-- SUCCESS ALERT --}}
                    @if (session('success'))
                        <div
                            class="mb-5 rounded-2xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">

                            {{ session('success') }}

                        </div>
                    @endif

                    {{-- TASKS --}}
                    <div class="mb-8">

                        <div class="flex items-center gap-2 mb-4">
                            <div
                                class="w-8 h-8 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-bold">
                                1
                            </div>

                            <h2 class="text-lg font-semibold text-gray-900">
                                Campaign Tasks
                            </h2>
                        </div>

                        <div class="space-y-4">

                            {{-- TASK --}}
                            <div class="border border-gray-200 rounded-2xl p-5">

                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                                    <div>
                                        <h3 class="font-semibold text-gray-900">
                                            Follow Our Facebook Page
                                        </h3>

                                        <p class="text-sm text-gray-500 mt-1">
                                            Follow LIKHA-UGC to stay updated with creator opportunities.
                                        </p>
                                    </div>

                                    <a href="https://web.facebook.com/likha.ugc/" target="_blank"
                                        class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-pink-600 hover:bg-pink-700 text-white font-medium transition">

                                        Follow Page

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>




                    {{-- FORM --}}
                    <form action="{{ route('campaign.free.portfolio.store') }}" method="POST">

                        @csrf

                        <div class="flex items-center gap-2 mb-4">
                            <div
                                class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-bold">
                                2
                            </div>

                            <h2 class="text-lg font-semibold text-gray-900">
                                Creator Application
                            </h2>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                            {{-- FULL NAME --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Full Name
                                </label>

                                <input type="text" name="full_name"
                                    class="w-full rounded-2xl border border-gray-300 px-4 py-3 text-sm focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:outline-none transition">
                            </div>

                            {{-- EMAIL --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Email Address
                                </label>

                                <input type="email" name="email"
                                    class="w-full rounded-2xl border border-gray-300 px-4 py-3 text-sm focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:outline-none transition">
                            </div>

                            {{-- FB --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Facebook Profile Link
                                </label>

                                <input type="url" name="facebook_link"
                                    class="w-full rounded-2xl border border-gray-300 px-4 py-3 text-sm focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:outline-none transition">
                            </div>

                            {{-- SOCIAL --}}
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    TikTok / Instagram Link
                                </label>

                                <input type="url" name="social_link"
                                    class="w-full rounded-2xl border border-gray-300 px-4 py-3 text-sm focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:outline-none transition">
                            </div>

                        </div>

                        {{-- WHY NEED --}}
                        <div class="mt-5">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Why do you need a professional portfolio?
                            </label>

                            <textarea rows="4" name="why_need"
                                class="w-full rounded-2xl border border-gray-300 px-4 py-3 text-sm focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:outline-none transition"
                                placeholder="Example: I want to build my creator identity and attract more brand opportunities."></textarea>
                        </div>

                        {{-- WHY DESERVE --}}
                        <div class="mt-5">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Why do you deserve to be selected?
                            </label>

                            <textarea rows="4" name="why_deserve"
                                class="w-full rounded-2xl border border-gray-300 px-4 py-3 text-sm focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:outline-none transition"
                                placeholder="Example: I’m passionate about content creation and willing to grow with LIKHA-UGC."></textarea>
                        </div>

                        {{-- SHARE TASK --}}
                        <div class="mt-10">

                            <div class="flex items-center gap-2 mb-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-fuchsia-100 flex items-center justify-center text-fuchsia-600 font-bold">
                                    3
                                </div>

                                <h2 class="text-lg font-semibold text-gray-900">
                                    Share This Campaign
                                </h2>
                            </div>

                            <div class="border border-gray-200 rounded-2xl p-5">

                                <p class="text-sm text-gray-500 mb-4">
                                    Copy the campaign caption below and post it publicly on Facebook
                                    to increase your chances of being selected.
                                </p>

                                <textarea id="campaignText" rows="12" readonly class="w-full rounded-xl border-gray-300 bg-gray-50 text-sm">🚀 I just joined the LIKHA-UGC Creator Campaign! ✨

Only 5 creators will be selected to receive a FREE professional UGC portfolio. 📱💼

If you’re a creator who wants to stand out online and attract more brand opportunities, join now!

🔗 https://likha-ugc.laravel.cloud/campaign-free-portfolio

#LIKHAUGC
#UGCCreatorPH
#CreatorPortfolio
#UGCPhilippines
#ContentCreatorPH
#UGCCommunity
#CreatorBrand
#DigitalCreator
#UGCMarketing
#FilipinoCreators</textarea>

                                <button type="button" onclick="copyCampaignText()"
                                    class="mt-4 inline-flex items-center justify-center px-5 py-3 rounded-xl bg-gray-900 hover:bg-black text-white font-medium transition">

                                    Copy Campaign Caption

                                </button>

                            </div>

                        </div>

                        {{-- WARNING --}}
                        <div class="mt-8 bg-yellow-50 border border-yellow-200 rounded-2xl p-5">

                            <div class="flex items-start gap-3">

                                <div class="text-2xl">
                                    ⚠️
                                </div>

                                <div>

                                    <h3 class="font-semibold text-yellow-900">
                                        Limited Slots Only
                                    </h3>

                                    <p class="text-sm text-yellow-700 mt-1">
                                        Only 5 creators will be selected for this campaign.
                                        Applications may close anytime once all slots are filled.
                                    </p>

                                </div>

                            </div>

                        </div>

                        {{-- SUBMIT --}}
                        <div class="mt-8">

                            <button type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-pink-600 hover:bg-pink-700 text-white font-semibold shadow-lg transition">

                                Submit Application 🚀

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <script>
        function copyCampaignText() {
            const text = document.getElementById('campaignText');

            text.select();
            text.setSelectionRange(0, 99999);

            navigator.clipboard.writeText(text.value);

            alert('Campaign caption copied!');
        }
    </script>

</x-app-layout>
