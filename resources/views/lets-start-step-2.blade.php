<x-app-layout>

    <section class="min-h-screen bg-pink-50 py-10 md:py-16 px-4 sm:px-6">

        <div class="max-w-5xl mx-auto">

            <!-- HEADER -->
            <div class="text-center mb-10">

                <p class="text-pink-500 font-semibold mb-3">
                    Step 2 of 4
                </p>

                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 leading-tight">
                    Customize Your Portfolio Theme
                </h1>

                <p class="text-gray-600 text-base sm:text-lg max-w-2xl mx-auto">
                    Personalize the look and feel of your creator portfolio.
                </p>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

                <!-- LEFT -->
                <div class="bg-white rounded-3xl shadow-md p-6 sm:p-8">

                    <h2 class="text-2xl font-bold text-gray-900 mb-8">
                        Theme Settings
                    </h2>

                    <!-- PRIMARY COLOR -->
                    <div class="mb-8">

                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            Primary Color
                        </label>

                        <div class="flex items-center gap-4">

                            <input type="color" id="primaryColor" value="#ec4899"
                                class="w-16 h-12 rounded cursor-pointer border-0">

                            <span id="primaryText" class="text-sm text-gray-600 font-medium">
                                #ec4899
                            </span>

                        </div>

                    </div>

                    <!-- SECONDARY COLOR -->
                    <div class="mb-8">

                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            Secondary Color
                        </label>

                        <div class="flex items-center gap-4">

                            <input type="color" id="secondaryColor" value="#111827"
                                class="w-16 h-12 rounded cursor-pointer border-0">

                            <span id="secondaryText" class="text-sm text-gray-600 font-medium">
                                #111827
                            </span>

                        </div>

                    </div>

                    <!-- FONT STYLE -->
                    <div class="mb-8">

                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            Font Style
                        </label>

                        <select id="fontSelector"
                            class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                            <option value="sans-serif">
                                Modern Sans
                            </option>

                            <option value="serif">
                                Elegant Serif
                            </option>

                            <option value="monospace">
                                Creative Mono
                            </option>

                            <option value="cursive">
                                Creator Script
                            </option>

                        </select>

                    </div>

                    <!-- BUTTON STYLE -->
                    <div>

                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            Button Style
                        </label>

                        <select id="buttonRadius"
                            class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                            <option value="0px">
                                Square
                            </option>

                            <option value="12px" selected>
                                Rounded
                            </option>

                            <option value="999px">
                                Pill
                            </option>

                        </select>

                    </div>

                </div>

                <!-- RIGHT -->
                <div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">
                        Sample Preview Only
                    </h2>

                    <!-- PREVIEW -->
                    <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">

                        <div id="previewCard" class="p-8 sm:p-10 text-center transition-all duration-300"
                            style="background:linear-gradient(to bottom, white, #fdf2f8);">

                            <!-- AVATAR -->
                            <div class="flex justify-center mb-6">

                                <div id="avatarBorder"
                                    class="w-28 h-28 rounded-full border-2 overflow-hidden shadow-lg bg-white"
                                    style="border-color:#ec4899;">

                                    <img id="previewAvatar" src="https://placehold.co/200x200"
                                        class="w-full h-full object-cover">

                                </div>

                            </div>

                            <!-- NAME -->
                            <h1 id="previewTitle"
                                class="text-xl sm:text-3xl font-extrabold mb-2 whitespace-nowrap overflow-hidden text-ellipsis"
                                style="color:#111827;">

                                Creator Name

                            </h1>

                            <!-- USERNAME -->
                            <p id="previewUsername" class="text-xl font-medium text-gray-500 mb-4">

                                @username

                            </p>

                            <!-- NICHE -->
                            <p id="previewNiche" class="text-base sm:text-lg font-semibold mb-4" style="color:#ec4899;">

                                Creator Niches

                            </p>

                            <!-- BIO -->
                            <p id="previewBio" class="text-gray-500 mb-8 max-w-md mx-auto">

                                Your creator bio will appear here.

                            </p>

                            <!-- BUTTON -->
                            <button id="previewButton"
                                class="px-8 py-3 font-semibold shadow-lg transition-all duration-300 border"
                                style="background:#ec4899; border-radius:12px; color:white; border-color:#111827;">

                                Work With Me

                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ACTION BUTTONS -->
            <div class="flex flex-row gap-3 mt-10">

                <!-- BACK -->
                <a href="{{ route('lets-start-step-1') }}"
                    class="w-1/3 inline-flex items-center justify-center border border-pink-500 text-pink-500 hover:bg-pink-500 hover:text-white py-3 sm:py-4 px-4 sm:px-8 rounded-xl text-sm sm:text-lg font-semibold shadow-sm transition">

                    Back

                </a>

                <!-- CONTINUE -->
                <button id="continueButton"
                    class="w-2/3 inline-flex items-center justify-center bg-pink-500 hover:bg-pink-600 text-white py-3 sm:py-4 px-4 sm:px-8 rounded-xl text-sm sm:text-lg font-semibold shadow-md transition">

                    Continue to Step 3

                </button>

            </div>


        </div>

    </section>

    <script>
        const creatorInfo =
            JSON.parse(localStorage.getItem('creatorInfo')) || {};

        const portfolioTheme =
            JSON.parse(localStorage.getItem('portfolioTheme')) || {};

        const previewAvatar =
            document.getElementById('previewAvatar');

        if (creatorInfo.avatar) {

            previewAvatar.src = creatorInfo.avatar;
        }

        document.getElementById('previewTitle').innerText =
            creatorInfo.full_name || 'Creator Name';

        document.getElementById('previewUsername').innerText =
            creatorInfo.username || '@username';

        document.getElementById('previewBio').innerText =
            creatorInfo.bio || 'Your creator bio will appear here.';

        document.getElementById('previewNiche').innerText =
            creatorInfo.niches?.join(' • ') || 'Creator Niches';

        const primaryColor = document.getElementById('primaryColor');
        const secondaryColor = document.getElementById('secondaryColor');
        const fontSelector = document.getElementById('fontSelector');
        const buttonRadius = document.getElementById('buttonRadius');

        const primaryText = document.getElementById('primaryText');
        const secondaryText = document.getElementById('secondaryText');

        const previewTitle = document.getElementById('previewTitle');
        const previewNiche = document.getElementById('previewNiche');
        const previewButton = document.getElementById('previewButton');
        const previewCard = document.getElementById('previewCard');
        const avatarBorder = document.getElementById('avatarBorder');

        // RESTORE THEME
        if (portfolioTheme.primary_color) {

            primaryColor.value =
                portfolioTheme.primary_color;
        }

        if (portfolioTheme.secondary_color) {

            secondaryColor.value =
                portfolioTheme.secondary_color;
        }

        if (portfolioTheme.font_style) {

            fontSelector.value =
                portfolioTheme.font_style;
        }

        if (portfolioTheme.button_radius) {

            buttonRadius.value =
                portfolioTheme.button_radius;
        }

        function isLightColor(hex) {

            hex = hex.replace('#', '');

            const r = parseInt(hex.substr(0, 2), 16);
            const g = parseInt(hex.substr(2, 2), 16);
            const b = parseInt(hex.substr(4, 2), 16);

            const brightness =
                ((r * 299) + (g * 587) + (b * 114)) / 1000;

            return brightness > 155;
        }

        function updateTheme() {

            const primary = primaryColor.value;
            const secondary = secondaryColor.value;
            const font = fontSelector.value;
            const radius = buttonRadius.value;

            // SAVE THEME
            localStorage.setItem(
                'portfolioTheme',
                JSON.stringify({

                    primary_color: primary,
                    secondary_color: secondary,
                    font_style: font,
                    button_radius: radius,

                })
            );

            primaryText.innerText = primary;
            secondaryText.innerText = secondary;

            previewTitle.style.color = secondary;
            previewTitle.style.fontFamily = font;

            previewNiche.style.color = primary;
            previewNiche.style.fontFamily = font;

            previewButton.style.background = primary;
            previewButton.style.borderRadius = radius;
            previewButton.style.fontFamily = font;

            avatarBorder.style.borderColor = primary;

            previewCard.style.background =
                `linear-gradient(to bottom, white, ${primary}15)`;

            previewCard.style.fontFamily = font;

            if (isLightColor(primary)) {

                previewButton.style.color = '#111827';
                previewButton.style.borderColor = '#111827';

            } else {

                previewButton.style.color = 'white';
                previewButton.style.borderColor = '#111827';
            }

            if (isLightColor(secondary)) {

                previewTitle.style.webkitTextStroke =
                    '1px #111827';

            } else {

                previewTitle.style.webkitTextStroke =
                    '0px transparent';
            }
        }

        updateTheme();

        primaryColor.addEventListener('input', updateTheme);
        secondaryColor.addEventListener('input', updateTheme);
        fontSelector.addEventListener('change', updateTheme);
        buttonRadius.addEventListener('change', updateTheme);
    </script>

    <script>
        document.getElementById('continueButton')
            .addEventListener('click', async function() {

                const button = this;

                button.disabled = true;

                try {

                    const payload = {

                        creator_profile_id: localStorage.getItem('creator_profile_id'),

                        primary_color: document.getElementById('primaryColor').value,

                        secondary_color: document.getElementById('secondaryColor').value,

                        font_style: document.getElementById('fontSelector').value,

                        button_radius: document.getElementById('buttonRadius').value,

                    };

                    // SAVE LOCAL STORAGE
                    localStorage.setItem(
                        'portfolioTheme',
                        JSON.stringify(payload)
                    );

                    // SAVE DATABASE
                    const response = await fetch(
                        "{{ route('creator-theme.store') }}", {

                            method: 'POST',

                            headers: {

                                'Content-Type': 'application/json',

                                'X-CSRF-TOKEN': document
                                    .querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content'),

                                'Accept': 'application/json',
                            },

                            body: JSON.stringify(payload),
                        }
                    );

                    const result = await response.json();

                    if (!response.ok) {

                        console.log(result);

                        alert('Failed to save theme');

                        button.disabled = false;

                        return;
                    }

                    window.location.href =
                        "{{ route('lets-start-step-3') }}";

                } catch (error) {

                    console.log(error);

                    alert('Something went wrong');

                    button.disabled = false;
                }
            });
    </script>


</x-app-layout>
