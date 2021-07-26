<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caculator</title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="number1">Số 1:</label>
        <input type="number" name="number1" id="number1"><br><br>
        <label for="number2">Số 2:</label>
        <input type="number" name="number2" id="number2"><br><br>
        <input type="submit" value="+" name="cacu"><br>
        <input type="submit" value="-" name="cacu"><br>
        <input type="submit" value="*" name="cacu"><br>
        <input type="submit" value="/" name="cacu"><br>
    </form>
</body>

</html>

<?php
function myFunction($x, $y, $cacu)
{
    if ($cacu == "+") {
        return $x + $y;
    } elseif ($cacu == "-") {
        return $x - $y;
    } elseif ($cacu == "*") {
        return $x * $y;
    } else {
        return $x / $y;
    }
}

$x1 = '';
$x2 = '';
if (isset($_GET['number1']) && isset($_GET['number2'])) {
    $x1 = $_GET['number1'];
    $x2 = $_GET['number2'];
    $cacu = $_GET['cacu'];
    echo myFunction($x1, $x2, $cacu);
}
?>