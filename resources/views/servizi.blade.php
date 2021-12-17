<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header style="display: flex; align-items:center">
        @if(count($links) > 0)
        <h1>Menu di Navigazione: </h1>
        <ul style="display: flex;">
            @foreach($links as $link)
            <li style="margin-right:20px;">
                <a href="{{ route($link) }}">{{$link}}</a>
            </li>       
            @endforeach
        </ul>
        @endif
    </header>
    <main>
        <h1>Benvenuto in Servizi</h1>
    </main>
    <footer>
        @if(count($links) > 0)
        <h3>Potrebbe interessarti: </h3>
        <ul>
            @foreach($links as $link)
            <li>
                <a href="{{ route($link) }}">{{$link}}</a>
            </li>       
            @endforeach
        </ul>
        @endif
    </footer>
</body>
</html>