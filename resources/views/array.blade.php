<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Массивы</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Товары из массива</h1>
        
        <div class="actions">
            <a href="{{ route('shuffle') }}">Перемешать,</a>
            <a href="{{ route('sort') }}">По цене,</a>
            <a href="{{ route('filter') }}">Цена > 1000</a>
        </div>


        
        <div class="product-row">
            @foreach($array as $product)
                <div>
                    <img src="{{ Vite::asset('resources/images/' . $product['path']) }}" alt="{{ $product['title'] }}" width="250">
                    <h3>{{ $product['title'] }}</h3>
                    <p>Цена: {{ $product['price'] }} руб.</p>

                </div>
            @endforeach
        </div>
    </main>


    <footer>
        <p>&copy; Хамитов Глеб, 2026 г.</p>
    </footer>
</body>
</html>