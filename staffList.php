<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #000000;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h1>Danh sach khach hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>NAME</th>
        <th>BIRTHDAY</th>
        <th>ADD</th>
        <th>PIC</th>
    </tr>
</table>
</body>
<?php
$customerList = ['1' => [
    'ten'=> "Nguyen Van X",
    'ngaysinh'=> '1966-09-20',
    'diachi'=>'Ha Noi',
    'anh'=> 'somethingGood/img1.jpg'
],
    '2'=> [
        'ten'=> "Nguyen Van Y",
        'ngaysinh'=> '1990-09-20',
        'diachi'=>'Ha Noi',
        'anh'=> 'somethingGood/img2.jpg'
    ],
    '3'=>[
        'ten'=> "Nguyen Van Z",
        'ngaysinh'=> '1976-09-20',
        'diachi'=>'Sai Gon',
        'anh'=> 'somethingGood/img3.jpg'
    ],
    '4'=>[
        'ten'=> "Nguyen Van A",
        'ngaysinh'=> '1989-09-20',
        'diachi'=>'Thai Binh',
        'anh'=> 'somethingGood/img4.jpg'
    ],
    '5'=>[
        'ten'=> "Nguyen Van B",
        'ngaysinh'=> '1978-09-20',
        'diachi'=>'Ha Noi',
        'anh'=> 'somethingGood/img5.jpg'
    ]
];
?>
<?php
foreach ($customerList as $key=> $value){
    echo '<tr>';
    echo '<td>'.$key."</td>";
    echo "<td>".$value['ten'].'</td>';
    echo "<td>".$value['ngaysinh'].'</td>';
    echo "<td>".$value['diachi'].'</td>';
    echo "<td><image src ='".$value['anh']."' width = '60px' height ='60px'/></td>";
echo '</tr>';
}
?>
</html>


















