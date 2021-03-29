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
<body class="antialiased bg-gray-200">

<div class="max-w-xl bg-green-100 mx-auto">
    <header class="bg-blue-500 p-4">
        <h1 class="font-bold text-gray-50 text-xl">My Site</h1>
    </header>

    <div class="grid grid-cols-12 p-4">
        <aside class="mr-6 col-span-3">
            <ul>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul>
        </aside>

        <main class="col-span-9">
            {{ $slot }}
        </main>
    </div>

    <footer class="p-4 flex items-center justify-between bg-blue-800 text-gray-50">
        <h5>My Site</h5>
        <p>2021</p>
    </footer>
</div>

@livewireScripts
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>

