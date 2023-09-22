<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upis nove osobe u bazu</h1>
    <form action="/store" method="POST">
        @csrf
        <label>Ime</label><br>
        <input type="text" name="ime"><br>
        <label>Prezime</label><br>
        <input type="text" name="prezime"><br>
        <button type="submit">Dodaj osobu</button>
    </form>
    <br>
    <a href="/show">Prikaz osoba iz baze</a>
</body>
</html>