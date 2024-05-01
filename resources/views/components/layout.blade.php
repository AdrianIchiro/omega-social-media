<!doctype html>
<html class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <div class="min-h-full">
        <x-nav>{{ $title }}</x-nav>
        <x-header>{{ $title }}</x-header>
        {{ $slot }}

    </div>
</body>

</html>
