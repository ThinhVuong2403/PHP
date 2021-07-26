<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hình sao</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="number">Enter a number: </label>
        <input type="number" name="number" id="number">
        <input type="submit" value="Submit">
    </form>

</body>

</html>

<?php

    $a = '';
    //hình 1
    // if ( isset ($_GET ['number'] ) ){
    //     $a = $_GET ['number'];
    //     for ( $i = 0; $i < $a; $i++ ){
    //         for ( $j = 0; $j <= $i; $j++ ) {
    //             echo '*';
    //         }
    //         echo '<br>';
    //     }
    // }

    //Hình 2
    // if ( isset ($_GET ['number'] ) ){
    //     $a = $_GET ['number'];
    //     for ( $i = 0; $i < $a; $i++ ){
    //         for ( $j = $a; $j > $i; $j-- ) {
    //             echo '* ';
    //         }
    //         echo '<br>';
    //     }
    // }

    //Hình 3
    // if ( isset ($_GET ['number'] ) ){
    //     $a = $_GET ['number'];
    //     for ( $i = 1; $i <= $a; $i++ ){
    //         for ( $k = 1; $k <= $a - $i; $k++) {
    //             echo '&nbsp;&nbsp; ';
    //         }
    //         for ( $j = $a; $j > $a - $i; $j-- ) {
    //             echo ' *';
    //         }
    //         echo '<br>';
    //     }
    // }

    //Hình 4
    // if ( isset ($_GET ['number'] ) ){
    //     $a = $_GET ['number'];
    //     for ( $i = 0; $i < $a; $i++ ){
    //         for ( $k = $a; $k > $a - $i; $k--) {
    //             echo ' &nbsp;&nbsp;';
    //         }
    //         for ( $j = $a; $j > $i; $j-- ) {
    //             echo ' *';
    //         }
    //         echo '<br>';
    //     }
    // }

    //Hình 5
    // if ( isset ($_GET ['number'] ) ){
    //     $a = $_GET ['number'];
    //     for ( $i = 0; $i <= $a; $i++ ){
    //         for ( $k = $a; $k > $i; $k--) {
    //             echo '&nbsp;&nbsp;';
    //         }
    //         for ( $j = 0; $j < $i; $j++ ) {
    //             echo '*&nbsp;&nbsp;';
    //         }
    //         echo '<br>';
    //     }
    // }

    //Hình 6
    if ( isset ($_GET ['number'] ) ){
        $a = $_GET ['number'];
        for ( $i = 0; $i <= $a; $i++ ){
            for ( $j = 0; $j < $i; $j++ ) {
                echo '&nbsp;&nbsp;';
            }
            for ( $k = $a; $k > $i; $k--) {
                echo '*&nbsp;&nbsp;';
            }
            echo '<br>';
        }
    }

    //&nbsp;&nbsp;
?>