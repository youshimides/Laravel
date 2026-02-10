<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая странница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h2>Вторая страница</h2>
    <p>{{$a}}</p>
    <p>{{$b}}</p>
    <p>сумма{{$a + $b}}</p>

    <div class="container mx-auto">
        @for ($i =0; $i< count($products); $i++)
            <p class="border-b-2">
                {{$products[$i]}}
            </p>
        @endfor

        @foreach($products as $product)
            <p class="border-b-2">
                {{$product}}
            </p>            
        @endforeach
    </div>
</body>
</html>