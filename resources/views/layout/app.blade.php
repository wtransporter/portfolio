<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>Laravel</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <style>
        html{
            scroll-behavior: smooth;
        }

        body {
            font-family: "Nunito", sans-serif;
        }
    </style>
</head>

<body class="antialiased dark:text-white">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">

        <x-layout.navigation />

        {{ $slot }}

        <x-layout.footer />
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function pause(milliseconds = 3000) {
            return new Promise(resolve => setTimeout(resolve, milliseconds));
        }
    </script>
</body>

</html>