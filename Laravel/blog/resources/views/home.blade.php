<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('articles') }}">Articoli</a></li>
        <li><a href="{{ route('whoIAm') }}">Chi siamo</a></li>
        <li><a href="{{ route('contacts') }}">Contatti</a></li>
    </ul>
</body>
</html>