<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương trình bậc 2</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="numberA">Nhập a:</label>
        <input type="number" id="numberA" name="numberA"><br><br>
        <label for="numberB">Nhập b:</label>
        <input type="number" id="numberB" name="numberB"><br><br>
        <label for="numberC">Nhập c:</label>
        <input type="number" id="numberC" name="numberC"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
$a = "";
$b = "";
$c = "";
if (isset($_POST["numberA"]) && isset($_POST["numberB"]) && isset($_POST["numberC"])) {
    $a = $_POST['numberA'];
    $b = $_POST['numberB'];
    $c = $_POST['numberC'];
}
if ( $a == "" || $b == "" || $c == "" ){
    echo "Mời nhập";
}
else if ($a == 0) echo "Phương trình không phải phương trình bậc 2";
else {
    $deta = $b * $b - 4 * $a * $c;
    if ($deta < 0) echo "Phương trình vô nghiệm";
    elseif ($deta == 0) echo "Phương trình có nghiệm kép x1 = x2 = " . (-$b / (2 * $a));
    else {
        $x1 = (-$b + sqrt($deta)) / (2 * $a);
        $x2 = (-$b - sqrt($deta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm là: x1 = " . $x1 . "<br>" . "x2 = " . $x2;
    }
}
?>