<x-app-layout>

    <section
        class="min-h-screen bg-gradient-to-b from-pink-50 to-white py-10 md:py-16 px-4 sm:px-6 overflow-hidden relative">

        <!-- CONFETTI BURST -->
        <div id="confettiContainer" class="fixed inset-0 z-50 pointer-events-none overflow-hidden">

            <!-- CONFETTI PIECES -->
            @for ($i = 0; $i < 80; $i++)
                <div class="confetti-piece"></div>
            @endfor

        </div>

        <div class="max-w-4xl mx-auto relative z-10">

            <!-- SUCCESS CARD -->
            <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden">

                <!-- TOP -->
                <div class="bg-pink-500 text-white text-center px-6 py-10 relative overflow-hidden">

                    <!-- DECOR -->
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-pink-400 rounded-full opacity-20"></div>

                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-pink-300 rounded-full opacity-20"></div>

                    <!-- SASH -->
                    <div
                        class="absolute -right-14 top-8 rotate-45 bg-yellow-300 text-pink-600 font-extrabold text-xs sm:text-sm px-16 py-2 shadow-lg tracking-widest z-30">

                        SUCCESS

                    </div>

                    <!-- ICON -->
                    <div class="text-7xl mb-5 relative z-10 animate-bounce">
                        🥳
                    </div>

                    <!-- TITLE -->
                    <h1 class="text-3xl sm:text-5xl font-extrabold mb-4 relative z-10">
                        Congratulations!
                    </h1>

                    <!-- SUBTITLE -->
                    <p class="text-pink-100 text-base sm:text-lg max-w-2xl mx-auto relative z-10">
                        Your LIKHA-UGC portfolio request has been successfully prepared and is now ready for review.
                    </p>

                </div>

                <!-- CONTENT -->
                <div class="p-6 sm:p-10 relative z-10">

                    <!-- PROCESS -->
                    <div class="mb-10">

                        <h2 class="text-2xl font-bold text-gray-900 mb-6">
                            What Happens Next?
                        </h2>

                        <div class="space-y-5">

                            <div class="flex gap-4">

                                <div
                                    class="w-10 h-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center font-bold shrink-0">
                                    1
                                </div>

                                <div>

                                    <h3 class="font-bold text-gray-900">
                                        Review & Assessment
                                    </h3>

                                    <p class="text-gray-500 text-sm sm:text-base mt-1">
                                        We will review your creator profile, selected sections, and Google Drive assets.
                                    </p>

                                </div>

                            </div>

                            <div class="flex gap-4">

                                <div
                                    class="w-10 h-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center font-bold shrink-0">
                                    2
                                </div>

                                <div>

                                    <h3 class="font-bold text-gray-900">
                                        Quotation & Timeline
                                    </h3>

                                    <p class="text-gray-500 text-sm sm:text-base mt-1">
                                        We will send the estimated costing, project scope, and delivery timeline.
                                    </p>

                                </div>

                            </div>

                            <div class="flex gap-4">

                                <div
                                    class="w-10 h-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center font-bold shrink-0">
                                    3
                                </div>

                                <div>

                                    <h3 class="font-bold text-gray-900">
                                        Portfolio Development
                                    </h3>

                                    <p class="text-gray-500 text-sm sm:text-base mt-1">
                                        Once approved, your custom UGC portfolio website will be built.
                                    </p>

                                </div>

                            </div>

                            <div class="flex gap-4">

                                <div
                                    class="w-10 h-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center font-bold shrink-0">
                                    4
                                </div>

                                <div>

                                    <h3 class="font-bold text-gray-900">
                                        Final Delivery
                                    </h3>

                                    <p class="text-gray-500 text-sm sm:text-base mt-1">
                                        Your finished portfolio will be delivered through your preferred contact method.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- CONTACT FORM -->
                    <div class="bg-pink-50 border border-pink-100 rounded-3xl p-6 sm:p-8">

                        <h2 class="text-2xl font-bold text-gray-900 mb-3">
                            Final Contact Details
                        </h2>

                        <p class="text-gray-500 mb-8">
                            Tell us where we should send updates, costing, and the final website.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Contact Email
                                </label>

                                <input type="email" id="contactEmail" placeholder="you@example.com"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                            </div>

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Mobile Number
                                </label>

                                <input type="text" id="mobileNumber" placeholder="+63 912 345 6789"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">

                            </div>

                        </div>

                        <div class="mt-6">

                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Additional Notes (Optional)
                            </label>

                            <textarea rows="4" id="additionalNotes" placeholder="Special requests, preferred deadline, extra features, etc."
                                class="w-full rounded-2xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400"></textarea>

                        </div>

                        {{-- ACTION BUTTONS --}}
                        <div class="mt-8 flex flex-row gap-3">

                            <!-- BACK -->
                            <a href="{{ route('lets-start-step-3') }}"
                                class="w-1/3 inline-flex items-center justify-center border border-pink-500 text-pink-500 hover:bg-pink-500 hover:text-white py-3 sm:py-4 px-4 sm:px-8 rounded-2xl text-sm sm:text-lg font-bold shadow-sm transition">

                                Back

                            </a>

                            <!-- SUBMIT -->
                            <button id="submitButton"
                                class="w-2/3 bg-pink-500 hover:bg-pink-600 text-white py-3 sm:py-4 rounded-2xl text-sm sm:text-lg font-bold shadow-lg transition hover:scale-[1.01]">

                                Submit Final Request

                            </button>


                        </div>

                        <!-- FOOT NOTE -->
                        <div class="text-center mt-8">

                            <p class="text-sm text-gray-400">
                                Thank you for choosing
                                <span class="font-bold text-pink-500">
                                    LIKHA-UGC
                                </span>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

    </section>

    <!-- CONFETTI STYLE -->
    <style>
        .confetti-piece {

            position: absolute;
            width: 12px;
            height: 18px;
            top: -20px;
            opacity: 0.9;
            animation: confetti-fall 2.5s ease-out forwards;
        }

        .confetti-piece:nth-child(odd) {
            background: #ec4899;
        }

        .confetti-piece:nth-child(even) {
            background: #fbbf24;
        }

        .confetti-piece:nth-child(3n) {
            background: #60a5fa;
        }

        .confetti-piece:nth-child(4n) {
            background: #34d399;
        }

        @keyframes confetti-fall {

            0% {
                transform: translateY(-100px) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(120vh) rotate(720deg);
                opacity: 0;
            }
        }
    </style>

    <!-- CONFETTI SCRIPT -->
    <script>
        const pieces =
            document.querySelectorAll('.confetti-piece');

        pieces.forEach((piece) => {

            piece.style.left =
                Math.random() * 100 + 'vw';

            piece.style.animationDelay =
                Math.random() * 0.8 + 's';

            piece.style.transform =
                `rotate(${Math.random() * 360}deg)`;

        });

        // AUTO REMOVE CONFETTI
        setTimeout(() => {

            const confetti =
                document.getElementById('confettiContainer');

            if (confetti) {

                confetti.style.display = 'none';
            }

        }, 3200);
    </script>

    <script>
        document.getElementById('submitButton')
            .addEventListener('click', async function() {

                const button = this;

                button.disabled = true;

                try {

                    const payload = {

                        creator_profile_id: localStorage.getItem('creator_profile_id'),

                        contact_email: document.getElementById('contactEmail').value,

                        mobile_number: document.getElementById('mobileNumber').value,

                        additional_notes: document.getElementById('additionalNotes').value,

                    };

                    // SAVE DATABASE
                    const response = await fetch(
                        "{{ route('creator-final.store') }}", {

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

                        alert('Failed to submit');

                        button.disabled = false;

                        return;
                    }

                    window.location.href =
                        "{{ route('support-us') }}";

                    // OPTIONAL CLEAR STORAGE
                    localStorage.removeItem('creatorInfo');
                    localStorage.removeItem('portfolioTheme');
                    localStorage.removeItem('portfolioStructure');
                    localStorage.removeItem('creator_profile_id');

                } catch (error) {

                    console.log(error);

                    alert('Something went wrong');

                    button.disabled = false;
                }
            });
    </script>

</x-app-layout>
