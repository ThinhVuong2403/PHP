<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    
    <table>
        <thead>
            <tr>
                <th>Ten</th>
                <th>Lop</th>
                <th>Diem</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // $t = date("H");
            // if($t < 20) echo "Have a good day";

            // date_default_timezone_set('Asia/Ho_Chi_Minh');
            // $t = date("H");

            // if ($t < "18") {
            //     echo "Have a good day";
            // } elseif ($t < "20") {
            //     echo "Have a good night";
            // } else {
            //     echo "Good";
            // }

            // $yourAge = 17;

            // switch ($yourAge){
            //     case ( $yourAge >= 18 ) :
            //         echo 'Bạn đủ tuổi';
            //         break;
            //     case ( 16 < $yourAge ) :
            //         echo 'Bạn chưa đủ tuổi';
            //         break;
            //     default :
            //         echo 'Không chơi với bạn';    
            // }

            //switch case thường thì chỉ để giá trị chứ không nên để biểu thức

            // $fiboArray = [ 1, 1];
            // $fibo = $fiboArray[0] + $fiboArray[1];
            // $fiboArray[] = $fibo;

            // do {
            //     echo $fibo . "</br>";
            //     $fibo = $fiboArray[count($fiboArray) - 1] + $fiboArray[count($fiboArray) - 2];
            //     $fiboArray[] = $fibo;
            // } while ($fibo <= 100)

            $sinhVien = [
                ['Nam', 'php2104', 9],
                ['Tuan Anh', 'php2103', 7],
                ['Thinh', 'php2103', 6],
            ];

            foreach ($sinhVien as $value) {
                echo "  <tr>
                    <td>$value[0]</td>
                    <td>$value[1]</td>
                    <td>$value[2]</td>
                </tr>";
            }

            ?>
        </tbody>
    </table>
</body>

</html>