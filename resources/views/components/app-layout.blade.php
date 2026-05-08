<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ $title ?? 'LIKHA-UGC' }}</title>

    <!-- TOM SELECT CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">

    <!-- TOM SELECT JS -->
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>


    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ec4899',
                    }
                }
            }
        }
    </script>

    @stack('styles')
</head>

<body>

    <!-- PAGE CONTENT -->
    <main>
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <footer class="bg-pink-50 p-2 text-center">

        <p class="text-sm text-gray-700 font-medium">
            © {{ date('Y') }} LIKHA-UGC
        </p>

        <p class="mt-1 text-sm text-pink-500 font-semibold">
            Gawa ng Pinoy, Para sa Creators
        </p>

    </footer>

    @stack('scripts')

</body>

</html>
