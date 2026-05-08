<x-app-layout>

    <style>
        .section-card {
            -webkit-tap-highlight-color: transparent;
            touch-action: manipulation;
            user-select: none;
            transition: none !important;
        }

        .section-card.selected {
            border-color: #ec4899;
            background-color: #fdf2f8;
        }

        .section-card:active {
            transform: scale(0.98);
        }
    </style>

    <section class="min-h-screen bg-pink-50 py-10 md:py-16 px-4 sm:px-6">

        <div class="max-w-6xl mx-auto">

            <!-- HEADER -->
            <div class="text-center mb-10">

                <p class="text-pink-500 font-semibold mb-3">
                    Step 3 of 4
                </p>

                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 leading-tight">
                    Portfolio Sections & Assets
                </h1>

                <p class="text-gray-600 text-base sm:text-lg max-w-2xl mx-auto">
                    Select the sections you want and organize your assets inside one Google Drive folder.
                </p>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

                <!-- LEFT -->
                <div class="bg-white rounded-3xl p-6 sm:p-8">

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">
                        Portfolio Sections
                    </h2>

                    <div class="grid grid-cols-2 gap-4">

                        <!-- HERO -->
                        <label class="section-card cursor-pointer border-2 border-gray-200 rounded-2xl p-4 sm:p-5">

                            <input type="checkbox" value="Hero" class="hidden section-checkbox">

                            <div class="text-center">

                                <div class="text-3xl sm:text-4xl mb-2">
                                    🚀
                                </div>

                                <h3 class="font-bold text-sm sm:text-lg text-gray-900">
                                    Hero
                                </h3>

                                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                    Landing section
                                </p>

                            </div>

                        </label>

                        <!-- ABOUT -->
                        <label class="section-card cursor-pointer border-2 border-gray-200 rounded-2xl p-4 sm:p-5">

                            <input type="checkbox" value="About" class="hidden section-checkbox">

                            <div class="text-center">

                                <div class="text-3xl sm:text-4xl mb-2">
                                    👤
                                </div>

                                <h3 class="font-bold text-sm sm:text-lg text-gray-900">
                                    About
                                </h3>

                                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                    Creator intro
                                </p>

                            </div>

                        </label>

                        <!-- PORTFOLIO -->
                        <label class="section-card cursor-pointer border-2 border-gray-200 rounded-2xl p-4 sm:p-5">

                            <input type="checkbox" value="Portfolio" class="hidden section-checkbox">

                            <div class="text-center">

                                <div class="text-3xl sm:text-4xl mb-2">
                                    🎬
                                </div>

                                <h3 class="font-bold text-sm sm:text-lg text-gray-900">
                                    Portfolio
                                </h3>

                                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                    Content showcase
                                </p>

                            </div>

                        </label>

                        <!-- SERVICES -->
                        <label class="section-card cursor-pointer border-2 border-gray-200 rounded-2xl p-4 sm:p-5">

                            <input type="checkbox" value="Services" class="hidden section-checkbox">

                            <div class="text-center">

                                <div class="text-3xl sm:text-4xl mb-2">
                                    💼
                                </div>

                                <h3 class="font-bold text-sm sm:text-lg text-gray-900">
                                    Services
                                </h3>

                                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                    UGC offers
                                </p>

                            </div>

                        </label>

                        <!-- RATES -->
                        <label class="section-card cursor-pointer border-2 border-gray-200 rounded-2xl p-4 sm:p-5">

                            <input type="checkbox" value="Rates" class="hidden section-checkbox">

                            <div class="text-center">

                                <div class="text-3xl sm:text-4xl mb-2">
                                    💰
                                </div>

                                <h3 class="font-bold text-sm sm:text-lg text-gray-900">
                                    Rates
                                </h3>

                                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                    Pricing
                                </p>

                            </div>

                        </label>

                        <!-- TESTIMONIALS -->
                        <label class="section-card cursor-pointer border-2 border-gray-200 rounded-2xl p-4 sm:p-5">

                            <input type="checkbox" value="Testimonials" class="hidden section-checkbox">

                            <div class="text-center">

                                <div class="text-3xl sm:text-4xl mb-2">
                                    ⭐
                                </div>

                                <h3 class="font-bold text-sm sm:text-lg text-gray-900">
                                    Reviews
                                </h3>

                                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                    Client feedback
                                </p>

                            </div>

                        </label>

                        <!-- BRANDS -->
                        <label class="section-card cursor-pointer border-2 border-gray-200 rounded-2xl p-4 sm:p-5">

                            <input type="checkbox" value="Brands" class="hidden section-checkbox">

                            <div class="text-center">

                                <div class="text-3xl sm:text-4xl mb-2">
                                    🏷️
                                </div>

                                <h3 class="font-bold text-sm sm:text-lg text-gray-900">
                                    Brands
                                </h3>

                                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                    Collaborations
                                </p>

                            </div>

                        </label>

                        <!-- CONTACT -->
                        <label class="section-card cursor-pointer border-2 border-gray-200 rounded-2xl p-4 sm:p-5">

                            <input type="checkbox" value="Contact" class="hidden section-checkbox">

                            <div class="text-center">

                                <div class="text-3xl sm:text-4xl mb-2">
                                    📩
                                </div>

                                <h3 class="font-bold text-sm sm:text-lg text-gray-900">
                                    Contact
                                </h3>

                                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                    Inquiry form
                                </p>

                            </div>

                        </label>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="bg-white rounded-3xl p-6 sm:p-8">

                    <h2 class="text-2xl font-bold text-gray-900 mb-2">
                        Google Drive Folder
                    </h2>

                    <p class="text-sm text-gray-500 mb-8">
                        Create one main Google Drive folder and place your assets inside matching subfolders based on
                        your selected sections.
                    </p>

                    <!-- INSTRUCTIONS -->
                    <div class="bg-pink-50 border border-pink-100 rounded-2xl p-5 mb-8">

                        <h3 class="font-bold text-pink-600 mb-4">
                            How To Prepare Your Assets
                        </h3>

                        <div class="space-y-3 text-sm text-gray-600">

                            <p>1. Create one main Google Drive folder.</p>

                            <p>2. Inside that folder, create subfolders matching your selected sections.</p>

                            <div
                                class="bg-white rounded-xl p-4 border border-pink-100 text-xs sm:text-sm font-medium text-gray-700">

                                📁 LIKHA-UGC Assets <br>
                                ┣ 📂 Hero <br>
                                ┣ 📂 About <br>
                                ┣ 📂 Portfolio <br>
                                ┣ 📂 Rates <br>
                                ┗ 📂 Brands

                            </div>

                            <p>3. Upload your files inside the correct folders.</p>

                            <p>4. Set the folder access to:</p>

                            <div
                                class="inline-flex items-center bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Anyone with the link can view and edit
                            </div>

                            <p>5. Paste the main folder link below.</p>

                        </div>

                    </div>

                    <!-- DRIVE LINK -->
                    <div>

                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Main Google Drive Folder Link
                        </label>

                        <input type="url" id="driveLink"
                            class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400"
                            placeholder="https://drive.google.com/...">

                        <p id="driveStatus" class="text-sm mt-3 hidden"></p>

                    </div>

                </div>

            </div>

            <!-- ACTION BUTTONS -->
            <div class="flex flex-row gap-3 mt-10">

                <!-- BACK -->
                <a href="{{ route('lets-start-step-2') }}"
                    class="w-1/3 inline-flex items-center justify-center border border-pink-500 text-pink-500 py-3 sm:py-4 px-4 sm:px-8 rounded-xl text-sm sm:text-lg font-semibold">

                    Back

                </a>

                <!-- CONTINUE -->
                <button id="continueButton"
                    class="w-2/3 inline-flex items-center justify-center bg-pink-500 text-white py-3 sm:py-4 px-4 sm:px-8 rounded-xl text-sm sm:text-lg font-semibold">

                    Finalize

                </button>

            </div>

        </div>

    </section>

    <script>
        const checkboxes =
            document.querySelectorAll('.section-checkbox');

        const driveLink =
            document.getElementById('driveLink');

        const driveStatus =
            document.getElementById('driveStatus');

        let portfolioStructure =
            JSON.parse(
                localStorage.getItem('portfolioStructure')
            ) || {
                portfolio_sections: [],
                drive_link: ''
            };

        // RESTORE
        checkboxes.forEach((checkbox) => {

            const card =
                checkbox.closest('.section-card');

            if (
                portfolioStructure.portfolio_sections.includes(
                    checkbox.value
                )
            ) {

                checkbox.checked = true;

                card.classList.add('selected');
            }

            // MOBILE FAST CLICK
            card.addEventListener('click', function(e) {

                e.preventDefault();

                checkbox.checked = !checkbox.checked;

                if (checkbox.checked) {

                    card.classList.add('selected');

                    if (
                        !portfolioStructure.portfolio_sections.includes(
                            checkbox.value
                        )
                    ) {

                        portfolioStructure.portfolio_sections.push(
                            checkbox.value
                        );
                    }

                } else {

                    card.classList.remove('selected');

                    portfolioStructure.portfolio_sections =
                        portfolioStructure.portfolio_sections.filter(
                            section =>
                            section !== checkbox.value
                        );
                }

                saveData();

            });

        });

        // RESTORE DRIVE LINK
        if (portfolioStructure.drive_link) {

            driveLink.value =
                portfolioStructure.drive_link;

            validateDriveLink();
        }

        // SAVE
        function saveData() {

            localStorage.setItem(
                'portfolioStructure',
                JSON.stringify(portfolioStructure)
            );
        }

        // VALIDATE LINK
        function validateDriveLink() {

            const value =
                driveLink.value.trim();

            if (!value) {

                driveStatus.className =
                    'text-sm mt-3 hidden';

                driveStatus.textContent = '';

                return;
            }

            driveStatus.classList.remove('hidden');

            if (!value.includes('drive.google.com')) {

                driveStatus.textContent =
                    '❌ Invalid Google Drive link';

                driveStatus.className =
                    'text-sm mt-3 text-red-500';

                return;
            }

            if (
                value.includes('/folders/') ||
                value.includes('usp=sharing')
            ) {

                driveStatus.textContent =
                    '✅ Link format looks good. Make sure the folder visibility is set to "Anyone with the link can view and edit".';

                driveStatus.className =
                    'text-sm mt-3 text-green-600';

            } else {

                driveStatus.textContent =
                    '⚠️ Link may not be publicly accessible.';

                driveStatus.className =
                    'text-sm mt-3 text-yellow-600';
            }
        }

        // DRIVE LINK INPUT
        driveLink.addEventListener('input', function() {

            portfolioStructure.drive_link =
                this.value;

            validateDriveLink();

            saveData();

        });
    </script>

    <script>
        document.getElementById('continueButton')
            .addEventListener('click', async function() {

                const button = this;

                button.disabled = true;

                try {

                    const selectedSections =
                        Array.from(
                            document.querySelectorAll('.section-checkbox:checked')
                        ).map(item => item.value);

                    const payload = {

                        creator_profile_id: localStorage.getItem('creator_profile_id'),

                        portfolio_sections: selectedSections,

                        drive_link: document.getElementById('driveLink').value,

                    };

                    // SAVE LOCAL STORAGE
                    localStorage.setItem(
                        'portfolioStructure',
                        JSON.stringify(payload)
                    );

                    // SAVE DATABASE
                    const response = await fetch(
                        "{{ route('creator-portfolio.store') }}", {

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

                        alert('Failed to save Step 3');

                        button.disabled = false;

                        return;
                    }

                    window.location.href =
                        "{{ route('lets-start-step-4') }}";

                } catch (error) {

                    console.log(error);

                    alert('Something went wrong');

                    button.disabled = false;
                }
            });
    </script>

</x-app-layout>
