<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевод в цифру</title>
</head>
<body>
    <form method="post">
        <a>Цифра:</a>
        <input type="number" name="d" min="0" max="9">
        <input type="submit" value="Перевести">
    </form>

<?php
    if(isset($_POST['d'])) {
        $words = ['ноль','один','два','три','четыре','пять','шесть','семь','восемь','девять'];
        $d = $_POST['d'];
        echo $words[$d];
    }
?>
</body>
</html>