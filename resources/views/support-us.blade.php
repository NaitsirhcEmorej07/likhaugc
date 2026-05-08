<x-app-layout>

    <section
        class="min-h-screen bg-gradient-to-b from-pink-50 to-white py-10 md:py-16 px-4 sm:px-6 overflow-hidden relative">

        <!-- CONFETTI -->
        <div id="confettiContainer" class="fixed inset-0 z-50 pointer-events-none overflow-hidden">

            @for ($i = 0; $i < 80; $i++)
                <div class="confetti-piece"></div>
            @endfor

        </div>

        <div class="max-w-3xl mx-auto relative z-10">

            <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden">

                <!-- HEADER -->
                <div class="bg-pink-500 text-white text-center px-6 py-12 relative overflow-hidden">

                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-pink-400 rounded-full opacity-20"></div>

                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-pink-300 rounded-full opacity-20"></div>

                    <div class="text-7xl mb-5 relative z-10 animate-bounce">
                        🎉
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-extrabold mb-4 relative z-10">
                        Thank You For Supporting
                        <br>
                        LIKHA-UGC
                    </h1>

                    <p class="text-pink-100 text-base sm:text-lg max-w-2xl mx-auto relative z-10">
                        Your portfolio request has been submitted successfully.
                    </p>

                </div>

                <!-- CONTENT -->
                <div class="p-6 sm:p-10">

                    <div class="text-center mb-10">

                        <h2 class="text-2xl font-bold text-gray-900 mb-3">
                            Connect With Us
                        </h2>

                        <p class="text-gray-500">
                            Follow and support our socials.
                        </p>

                    </div>

                    <!-- SOCIAL LINKS -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <!-- FACEBOOK -->
                        <a href="https://facebook.com" target="_blank"
                            class="flex items-center justify-center gap-3 bg-blue-600 hover:bg-blue-700 text-white px-6 py-4 rounded-2xl font-bold shadow-md transition hover:scale-[1.01]">

                            📘 Facebook

                        </a>

                        <!-- INSTAGRAM -->
                        <a href="https://instagram.com" target="_blank"
                            class="flex items-center justify-center gap-3 bg-pink-500 hover:bg-pink-600 text-white px-6 py-4 rounded-2xl font-bold shadow-md transition hover:scale-[1.01]">

                            📸 Instagram

                        </a>

                        <!-- TIKTOK -->
                        <a href="https://tiktok.com" target="_blank"
                            class="flex items-center justify-center gap-3 bg-black hover:bg-gray-800 text-white px-6 py-4 rounded-2xl font-bold shadow-md transition hover:scale-[1.01]">

                            🎵 TikTok

                        </a>

                        <!-- YOUTUBE -->
                        <a href="https://youtube.com" target="_blank"
                            class="flex items-center justify-center gap-3 bg-red-600 hover:bg-red-700 text-white px-6 py-4 rounded-2xl font-bold shadow-md transition hover:scale-[1.01]">

                            ▶️ YouTube

                        </a>

                    </div>

                    <!-- FOOT NOTE -->
                    <div class="text-center mt-10">

                        <p class="text-gray-400 text-sm">
                            Made with ❤️ by
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

        setTimeout(() => {

            const confetti =
                document.getElementById('confettiContainer');

            if (confetti) {

                confetti.style.display = 'none';
            }

        }, 3200);


        // AUTO REDIRECT AFTER 1 MINUTE
        setTimeout(() => {

            // NOTIFICATION
            const notif = document.createElement('div');

            notif.innerHTML = `
                                <div class="fixed top-5 right-5 z-[9999] bg-gray-900 text-white px-6 py-4 rounded-2xl shadow-2xl border border-white/10 animate-pulse">

                                    ⏳ Session expired. Redirecting to homepage...

                                </div>
                            `;

            document.body.appendChild(notif);

            // REDIRECT AFTER 2 SECONDS
            setTimeout(() => {

                window.location.href = '/';

            }, 2000);

        }, 60000);
        
    </script>

</x-app-layout>
