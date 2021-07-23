<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="word">Nhập từ: </label>
        <input type="text" name="word" id="word">
        <input type="submit" value="Dịch">
    </form>
</body>
</html>

<?php 
    $arrayWord = [ 'Hello' => 'Chào',
        'Chicken' => "Gà",
        'Chicken pox' => 'Thủy đậu',
        'Chicken breast' => 'Ức gà',
        'Darling' => 'Cục cưng',
        'Date' => 'Ngày',
        'Damn' => 'Chết tiệt',
        'Daughter' => 'Con gái',
        'Bad' => "Tồi tệ",
        'Badge' => 'Huy hiệu',
    ];

    $word = '';
    if ( isset ( $_GET ['word'] )){
        $word = $_GET ['word'];
        $wordTrans = '';
        foreach ( $arrayWord as $value){
            
        }
    }
?>
