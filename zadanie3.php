<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    zrobic formularz, zmnienna pobierajaca dane z formularza, trim, ltrim
    trim($nazwa_zmiennej) -->
    <form action="oblicz.php" method="_POST">
    <fieldset>
        <input type="text" name="imie" id="imie" placeholder="imie"><br>
        <input type="text" name="nazwisko" id="nazwisko" placeholder="nazwisko"><br>
        <input type="submit" name="wyslij" id="wyslij">
    </fieldset>
    </form>
</body>
</html>