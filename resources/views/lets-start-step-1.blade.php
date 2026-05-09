<x-app-layout>

    <section class="min-h-screen bg-pink-50 py-10 md:py-16 px-4 sm:px-6">

        <div class="max-w-3xl mx-auto">

            <!-- HEADER -->
            <div class="text-center mb-10">

                <p class="text-pink-500 font-semibold mb-3">
                    Step 1 of 4
                </p>

                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 leading-tight">
                    Basic Creator Information
                </h1>

                <p class="text-gray-600 text-base sm:text-lg max-w-2xl mx-auto">
                    Tell us about yourself so we can build your personalized UGC portfolio.
                </p>

            </div>

            <!-- FORM CARD -->
            <div class="bg-white rounded-3xl shadow-md p-6 sm:p-8 md:p-10">

                <form id="creatorForm" enctype="multipart/form-data">

                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- FULL NAME -->
                        <div>

                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Full Name
                            </label>

                            <input type="text" name="full_name" placeholder="Juan Dela Cruz"
                                class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                        </div>

                        <!-- USERNAME -->
                        <div>

                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Display Name/Username
                            </label>

                            <input type="text" name="username" 
                                class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                        </div>

                        <!-- EMAIL -->
                        <div>

                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address
                            </label>

                            <input type="email" name="email" placeholder="you@example.com"
                                class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                        </div>

                        <!-- NICHE -->
                        <div>

                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Creator Niches
                            </label>

                            <select id="niches" name="niches[]" multiple placeholder="Select Niches">

                                <option value="Beauty">Beauty</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Fitness">Fitness</option>
                                <option value="Food">Food</option>
                                <option value="Gaming">Gaming</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Mom">Mom</option>
                                <option value="Technology">Technology</option>
                                <option value="Travel">Travel</option>

                            </select>

                        </div>

                    </div>

                    <!-- BIO -->
                    <div class="mt-6">

                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Short Bio
                        </label>

                        <textarea name="bio" rows="5" placeholder="Tell brands about yourself..."
                            class="w-full rounded-2xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400"></textarea>

                    </div>

                    <!-- AVATAR -->
                    <div class="mt-6">

                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Profile Picture
                        </label>

                        <!-- CUSTOM FILE INPUT -->
                        <label
                            class="flex items-center gap-3 w-full rounded-xl border border-gray-200 bg-white px-4 py-3 cursor-pointer">

                            <span
                                class="bg-gray-100 hover:bg-gray-200 border border-gray-300 px-4 py-2 rounded-lg text-sm font-medium text-gray-700">

                                Choose File

                            </span>

                            <span id="fileName" class="text-sm text-gray-500 truncate">

                                No file chosen

                            </span>

                            <input type="file" name="avatar" class="hidden">

                        </label>

                    </div>

                    <!-- SOCIALS -->
                    <div class="mt-8">

                        <h2 class="text-xl font-bold text-gray-900 mb-5">
                            Social Links
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- TIKTOK -->
                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    TikTok
                                </label>

                                <input type="text" name="tiktok" placeholder="https://tiktok.com/@username"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                            </div>

                            <!-- INSTAGRAM -->
                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Instagram
                                </label>

                                <input type="text" name="instagram" placeholder="https://instagram.com/username"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                            </div>

                            <!-- FACEBOOK -->
                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Facebook
                                </label>

                                <input type="text" name="facebook" placeholder="https://facebook.com/username"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                            </div>

                            <!-- YOUTUBE -->
                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    YouTube
                                </label>

                                <input type="text" name="youtube" placeholder="https://youtube.com/@username"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                            </div>

                        </div>

                    </div>

                    <!-- ACTION BUTTONS -->
                    <div class="mt-10 flex flex-col sm:flex-row justify-end gap-4">

                        {{-- <!-- BACK -->
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center justify-center border border-pink-500 text-pink-500 hover:bg-pink-500 hover:text-white px-8 py-3 rounded-xl text-lg font-semibold shadow-sm transition">

                            Back

                        </a> --}}

                        <!-- CONTINUE -->
                        <button type="button" id="continueButton"
                            class="inline-flex items-center justify-center bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-xl text-lg font-semibold shadow-md transition">

                            Step 2

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>


    <script>
        new TomSelect('#niches', {
            plugins: ['remove_button'],
            create: false,
            persist: false,
            maxItems: null,
        });
    </script>

    <script>
        document.getElementById('continueButton')
            .addEventListener('click', async function() {

                const continueButton = this;

                continueButton.disabled = true;

                try {

                    const avatarInput =
                        document.querySelector('[name="avatar"]');

                    const creatorInfo =
                        JSON.parse(localStorage.getItem('creatorInfo')) || {};

                    let avatarBase64 =
                        creatorInfo.avatar || '';

                    const file = avatarInput.files[0];

                    // CHECK FILE
                    if (file) {

                        // LIMIT SIZE
                        if (file.size > 2 * 1024 * 1024) {

                            alert('Image must be below 2MB');

                            continueButton.disabled = false;

                            return;
                        }

                        avatarBase64 = await convertToBase64(file);
                    }

                    // FORM DATA
                    const payload = {

                        creator_profile_id: localStorage.getItem('creator_profile_id'),

                        full_name: document.querySelector('[name="full_name"]').value,

                        avatar_name: file ? file.name : '',

                        username: document.querySelector('[name="username"]').value,

                        email: document.querySelector('[name="email"]').value,

                        niches: Array.from(
                            document.querySelector('#niches').selectedOptions
                        ).map(option => option.value),

                        bio: document.querySelector('[name="bio"]').value,

                        avatar: avatarBase64,

                        tiktok: document.querySelector('[name="tiktok"]').value,

                        instagram: document.querySelector('[name="instagram"]').value,

                        facebook: document.querySelector('[name="facebook"]').value,

                        youtube: document.querySelector('[name="youtube"]').value,

                    };

                    // SAVE LOCAL STORAGE
                    localStorage.setItem(
                        'creatorInfo',
                        JSON.stringify(payload)
                    );

                    // SAVE DATABASE
                    const response = await fetch(
                        "{{ route('creator-info.store') }}", {

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

                        alert('Failed to save');

                        continueButton.disabled = false;

                        return;
                    }

                    // SAVE ID
                    localStorage.setItem(
                        'creator_profile_id',
                        result.id
                    );

                    window.location.href =
                        "{{ route('lets-start-step-2') }}";

                } catch (error) {

                    console.log(error);

                    alert('Something went wrong');

                    continueButton.disabled = false;
                }
            });

        function convertToBase64(file) {

            return new Promise((resolve, reject) => {

                const reader = new FileReader();

                reader.readAsDataURL(file);

                reader.onload = () => resolve(reader.result);

                reader.onerror = error => reject(error);

            });
        }
    </script>

    <script>
        const creatorInfo =
            JSON.parse(localStorage.getItem('creatorInfo')) || {};

        if (creatorInfo.full_name) {

            document.querySelector('[name="full_name"]').value =
                creatorInfo.full_name;
        }

        if (creatorInfo.username) {

            document.querySelector('[name="username"]').value =
                creatorInfo.username;
        }

        if (creatorInfo.email) {

            document.querySelector('[name="email"]').value =
                creatorInfo.email;
        }

        if (creatorInfo.bio) {

            document.querySelector('[name="bio"]').value =
                creatorInfo.bio;
        }

        if (creatorInfo.tiktok) {

            document.querySelector('[name="tiktok"]').value =
                creatorInfo.tiktok;
        }

        if (creatorInfo.instagram) {

            document.querySelector('[name="instagram"]').value =
                creatorInfo.instagram;
        }

        if (creatorInfo.facebook) {

            document.querySelector('[name="facebook"]').value =
                creatorInfo.facebook;
        }

        if (creatorInfo.youtube) {

            document.querySelector('[name="youtube"]').value =
                creatorInfo.youtube;
        }

        if (creatorInfo.niches) {

            const tomSelect =
                document.querySelector('#niches').tomselect;

            tomSelect.setValue(creatorInfo.niches);
        }
    </script>


    <script>
        function compressImage(base64, callback) {

            const img = new Image();

            img.onload = function() {

                const canvas =
                    document.createElement('canvas');

                const maxWidth = 400;

                const scaleSize =
                    maxWidth / img.width;

                canvas.width = maxWidth;

                canvas.height =
                    img.height * scaleSize;

                const ctx =
                    canvas.getContext('2d');

                ctx.drawImage(
                    img,
                    0,
                    0,
                    canvas.width,
                    canvas.height
                );

                // COMPRESS JPEG
                const compressedBase64 =
                    canvas.toDataURL(
                        'image/jpeg',
                        0.6
                    );

                callback(compressedBase64);

            };

            img.src = base64;
        }
    </script>


    <script>
        const avatarInput =
            document.querySelector('[name="avatar"]');

        const fileName =
            document.getElementById('fileName');

        // NEW FILE SELECTED
        avatarInput.addEventListener('change', function() {

            if (this.files.length > 0) {

                fileName.textContent =
                    this.files[0].name;

                fileName.classList.remove('text-gray-500');

                fileName.classList.add('text-green-600');

            }

        });

        // RESTORE SAVED STATE
        if (
            creatorInfo &&
            creatorInfo.avatar
        ) {

            fileName.textContent =
                creatorInfo.avatar_name || '✅ Profile picture already saved';

            fileName.classList.remove('text-gray-500');

            fileName.classList.add('text-green-600');
        }
    </script>



</x-app-layout>
