<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/luvi-ui.css'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="flex items-center justify-center min-h-screen antialiased bg-gray-100">
    {{ $slot }}
</body>

</html>
