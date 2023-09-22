<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Popis osoba iz baze</h1>
    <ol>
        @foreach ($osobe as $osoba)
        <li>{{$osoba->ime}} {{$osoba->prezime}}</li>
        @endforeach
    </ol>
    <br>
    <a href="/form">Povratak na formu</a>
</body>
</html>