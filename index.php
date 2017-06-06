<?php
    require 'functions.php';
    $db = createDBConnection();
    $query = "SELECT * FROM customers";
    $customerlist = $db->query($query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>bài hiện thị danh sách</h1>
<a href="insert.php">Insert new customer</a>
<table>
    <tr>
        <th>STT</th>
        <th>Họ và Tên</th>
        <th>Ngày Sinh</th>
        <th>Địa Chỉ</th>
    </tr>
    <?php
    foreach($customerlist as $key => $values){
        ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $values["name"] ?></td>
            <td><?= $values["dob"] ?></td>
            <td><?= $values["address"] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>