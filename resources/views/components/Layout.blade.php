<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Manicolandia' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-4">{{ $slot }}</body>

</html>
