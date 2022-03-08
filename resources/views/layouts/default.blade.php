<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.24.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .text-main {
            color: #87A888 !important;
        }

        .bg-main {
            border-color: #87A888 !important;
            background: #87A888 !important;
        }

        .progress-main {
            border-color: #87A888 !important;
            background: #87A888 !important;
        }
    </style>
</head>

<body data-theme="light" class="bg-gray-100 font-light">

    <div class="min-h-screen">
        <x-cms-header />
        <main class="-mt-24 pb-8">
            {{ $slot }}
        </main>
        <x-cms-footer />
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>