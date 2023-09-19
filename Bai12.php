<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
        ];

        // Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng
        $firstElement = reset($numbers);
        $lastElement = end($numbers);

        // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị từ mảng
        $maxValue = max($numbers);
        $minValue = min($numbers);
        $sum = array_sum($numbers);

        // Sắp xếp mảng theo chiều tăng và giảm các giá trị
        sort($numbers);
        $ascending = $numbers;
        rsort($numbers);
        $descending = $numbers;

        // Sắp xếp mảng theo chiều tăng và giảm các key
        ksort($numbers);
        $ascendingByKey = $numbers;
        krsort($numbers);
        $descendingByKey = $numbers;

        // In kết quả
        echo "Phần tử đầu tiên: $firstElement\n";echo"<br>";
        echo "Phần tử cuối cùng: $lastElement\n";echo"<br>";
        echo "Số lớn nhất: $maxValue\n";echo"<br>";
        echo "Số nhỏ nhất: $minValue\n";echo"<br>";
        echo "Tổng các giá trị: $sum\n";echo"<br>";

        echo "Mảng sắp xếp tăng dần theo giá trị: \n";echo"<br>";
        print_r($ascending);echo"<br>";
        echo"<br>";

        echo "Mảng sắp xếp giảm dần theo giá trị: \n";echo"<br>";
        print_r($descending);echo"<br>";
        echo"<br>";

        echo "Mảng sắp xếp tăng dần theo key: \n";echo"<br>";
        print_r($ascendingByKey);echo"<br>";
        echo"<br>";

        echo "Mảng sắp xếp giảm dần theo key: \n";
        print_r($descendingByKey);
    ?>
</body>
</html>