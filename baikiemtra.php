<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. Function giải PT bậc 2: ax^2 + bx + c = 0
    function giaiPT($a, $b, $c) {
        if ($a == 0) {
            if ($b == 0) {
                return $c == 0 ? "PT có vô số nghiệm" : "PT vô nghiệm";
            } else {
                return "PT có 1 nghiệm: x = " . (-$c / $b);
            }
        }

        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            return "PT vô nghiệm";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "PT có nghiệm kép: x = $x";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "PT có 2 nghiệm: x1 = $x1, x2 = $x2";
        }
    }
    //test: Giải PT bậc 2 với a=1, b=-3, c=2 (PT x^2 - 3x + 2 = 0)
    echo giaiPT(1, -3, 2);
    echo "<br><br>";
    // 2. Function in ra màn hình chữ nhật rỗng kích thước 5x7
    function inChuNhat() {
        $length = 5; // Chiều dài của hình chữ nhật
        $width = 7; // Chiều rộng của hình chữ nhật
    
        for ($i = 1; $i <= $length; $i++) {
            for ($j = 1; $j <= $width; $j++) {
                if ($i == 1 || $i == $length || $j == 1 || $j == $width) {
                    echo "* ";
                } else {
                    echo "  ";
                }
            }
            echo "<br><br>";
        }
    }
    inChuNhat();

    // 3. Function tính trung bình cộng của mảng
    function tinhSUM($arr) {
        if (count($arr) == 0) {
         return 0;
        }
        $tong = array_sum($arr);
        return $tong / count($arr);
    }
    // Yêu cầu 3: Tính trung bình cộng của mảng [1, 2, 3, 4, 5]
    $array = [1, 2, 3, 4, 5];
    echo "Trung bình cộng của mảng là: " . tinhSUM($array);
    ?>
    
</body>
</html>