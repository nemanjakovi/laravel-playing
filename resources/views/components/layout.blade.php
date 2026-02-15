@props([
    'title' => 'Laracast',
])
<!DOCTYPE html>
<html lang="en" data-theme ="night">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />

</head>

<body class="">
    <x-nav />

    <main class="max-w-3x1 mt-6 mx-90">
        {{ $slot }}

    </main>

</body>

</html>
