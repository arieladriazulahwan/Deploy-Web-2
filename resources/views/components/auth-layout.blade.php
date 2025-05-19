<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Auth Page' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
</head>
<body class="bg-zinc-100">
    <main class="flex items-center justify-center min-h-screen">
        <div class="space-y-6 p-6 max-w-md w-full">
            <div class="text-center">
                <h1 class="text-2xl font-bold">{{ $section_title ?? '' }}</h1>
                <p class="text-sm text-gray-600">{{ $section_description ?? '' }}</p>
            </div>
            <div class="bg-white p-6 shadow rounded">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>
</html>
