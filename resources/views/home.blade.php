<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>
<body>
    <h1>Hello World</h1>
    <h2>{{ $titolo}}</h2>
    <p>{{$intro}}</p>
    
    @if(count($altro) > 0)
    <h3>Potrebbe interessarti: </h3>
    <ul>
        @foreach($altro as $dato)
        <li><a href="">{{$dato}}</a></li>       
        @endforeach
    </ul>
    @endif
</body>
</html>