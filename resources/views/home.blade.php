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
       
    </header>

                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Массивы</a></li>
         <main>
        <h1>Альбомы</h1>
    
    
        <div>
            <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="logo" width="250">
            <p>yeat</p>
        </div>

    </main>

    <footer>
    &copy; Хамитов Глеб, 2026 г.
    </footer>
</body>
</html>