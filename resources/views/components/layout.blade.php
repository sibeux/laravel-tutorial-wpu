<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Karena pakai tailwind, ini unused --}}
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    <!--
    This example requires updating your template:

    ```
    <html class="h-full bg-gray-900">
    <body class="h-full">
    ```
-->
    <div class="min-h-full">
        <x-navbar></x-navbar>

        {{-- Kode {SLOT} => Kata "Homepage" akan di-assign ke variable $slot" --}}
        <x-header>{{ $title }}</x-header>
        <main class="bg-white">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
{{-- Karena pakai tailwind, ini unused --}}
{{-- <script src="js/script.js"></script> --}}

</html>
