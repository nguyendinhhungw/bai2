<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // for($i=0;$i<10;$i++){
    //     echo $i."<br>";
    // }
    // $a=0
    // while ($a <= 20) {

        
    //     echo$a."<br>";
    //     $a++;
    //     if (a==9){
    //         continue
    //     }

    // }
    //tính chu vi hình chữ nhật
    function chuvi($a, $b) {
        if ($a <= 0 || $b <= 0) {
            return "Chiều dài và chiều rộng phải là các số dương.";
        }
        
        $chuVi = 2 * ($a + $b);
        return $chuVi;
    }
    echo "Chu vi hình chữ nhật: " . chuvi(1, 12) . "<br>";
    // giải phương trình bậc NHẤT khi đã biết a và b
    
    function giaiPT($a, $b) {
        
        if ($a == 0) {
            if ($b == 0) {
                return "Phương trình có vô số nghiệm.";
            } else {
                return "Phương trình vô nghiệm.";
            }
        } else {
            
            $x = -$b / $a;
            return "Phương trình có nghiệm: x = " . $x;
        }
    }
    //in ra tên 1 bạn bất kì
    
    // Tạo mảng kết hợp
    $danhSachHocSinh = array(
        "1" => "Nguyễn Đình Hưng",
        "2" => "Trần Văn Hùng",
        "3" => "Lê Văn Luyện",
        "4" => "Phan Bá Vành"
    );
    $sttRandom = array_rand($danhSachHocSinh);
    $tenTuongUng = $danhSachHocSinh[$sttRandom];
    echo "Mời bạn có STT \"$sttRandom\" - \"$tenTuongUng\" lên bảng làm bài tập.";
    
    
    
    


    
      
    
    
    
    
    
    
    
    
    


    ?>
</body>
</html>