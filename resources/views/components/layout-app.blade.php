<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modals using TALL</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}">
    @livewireStyles
</head>
<body class="antialiased">

{{ $slot }}

@livewireScripts
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>
