<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка на високосность</title>
</head>
<body>
    <form method="post">
        <a>Введите год:</a>
        <input type="number" name="year" min="1" max="30000">
        <input type="submit" value="Проверить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['year'];
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            $result = "YES";
        } else {
            $result = "NO";
        }
        echo $result;
    }
    ?>
</body>
</html>