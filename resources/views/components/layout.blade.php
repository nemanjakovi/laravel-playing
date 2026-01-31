@props([
    'title' => 'Laracast',
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-gray-700 p-6 max-v-xl mx-auto">


    <main>
        {{ $slot }}

    </main>

</body>

</html>
