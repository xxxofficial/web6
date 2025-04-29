<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Факториал</title>
</head>
<body>
    <form method="POST">
        <a>Введите число:</a>
        <input type="number" name="number" min="0" required>
        <input type="submit" value="Вычислить">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = (int) ($_POST["number"] ?? 0);

        function factorial($n)
        {
            if ($n <= 1) {
                return 1;
            }
            return $n * factorial($n - 1);
        }

        $result = factorial($number);
        echo "<p>Факториал $number = $result</p>";
    } ?>
</body>
</html>
