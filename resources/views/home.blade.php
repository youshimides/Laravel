<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class=" bg-lime-400">
        <p>Главная</p>
        <p>Массивы</p>
    </header>

                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Массивы</a></li>
        <!-- <div>
            <img src="{{ Vite::asset('resources/images/after.png') }}" alt="">
            <p>afterlyfe</p>
        </div>
        <div>
            <img src="{{ Vite::asset('resources/images/2093.png') }}" alt="">
            <p>2093</p>
        </div>
        <div>
            <img src="{{ Vite::asset('resources/images/dangerous.png') }}" alt="">
            <p>dangerous</p>
        </div>
        <div>
            <img src="{{ Vite::asset('resources/images/up.png') }}" alt="">
            <p>up2me</p>
        </div> -->
    <footer>
    &copy; Хамитов Глеб, 2026 г.
    </footer>
</body>
</html>