<!doctype html>
<html class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/luvi-ui.css'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="antialiased bg-gray-100">
    <div>

        @isset($navbar)
            <x-navbar />
        @endisset

        <main>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

    </div>
</body>

</html>
