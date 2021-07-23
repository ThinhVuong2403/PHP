<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>

<body>
    <style>
        table{
            border: 1px solid black;
        }
        th, td{
            border: 1px solid black;
            margin: 5px;
        }
    </style>
    <h1>Information</h1>
</body>

</html>

<?php
$customer = [
    ['Thinh', '0984200734', 'Nam', '24/03/1999', 'Thái Bình'],
    ['Minh', '0984200123', 'Nam', '01/10/1999', 'Thái Bình'],
    ['Long', '0984200134', 'Nam', '25/03/1999', 'Thái Bình'],
    ['Truong', '0984200145', 'Nam', '26/03/1999', 'Thái Bình'],
    ['Thao', '0984200156', 'Nu', '27/03/1999', 'Thái Bình'],
    ['Thanh', '0984200167', 'Nu', '28/03/1999', 'Thái Bình'],
    ['Lan', '0984200168', 'Nu', '29/03/1999', 'Thái Bình'],
];

    echo '<table>
        <thead>
            <tr>
                <th>Tên</th>
                <th>Số điện thoại</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Quê quán</th>
            </tr>
        </thead>
        <tbody>
        ';
    foreach ( $customer as $value) {
        echo "<tr>";
        foreach ( $value as $v) {
            echo "<td>$v</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>
        </table>";
?>

