<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = array(1, 2, 3, 4, 5);

    // Xóa phần tử thứ 3 (key 2) trong mảng
    array_splice($array, 2, 1);

    // Đảm bảo key của mảng là tuần tự
    $array = array_values($array);

    // In mảng sau khi xóa
    echo"Mảng sau khi xóa là: <br>";
    print_r($array);
    ?>

</body>
</html>