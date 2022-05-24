<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <style>
        body {
            font-family: "Nunito", sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <x-layout.navigation />

    {{-- <div class="flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 bg-slate-200">

            {{ $slot }}

            <div
                class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div
                    class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                    (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div> --}}

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>