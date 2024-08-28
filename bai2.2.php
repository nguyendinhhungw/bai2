<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $string = "Vietnam muon nam";
     // 1. Đếm số ký tự trong một chuỗi sử dụng hàm strlen()
     $length = strlen($string);
     echo "1. Số ký tự trong chuỗi '$string' là: $length<br>";
     // 2. Đếm số từ trong một chuỗi sử dụng hàm str_word_count()
     $sotu = str_word_count($string);
     echo "2. Số từ trong chuỗi '$string' là: $sotu<br>";
     // 3. Đảo ngược một chuỗi sử dụng hàm strrev()
     $reversedString = strrev($string);
     echo "3. Chuỗi đảo ngược của '$string' là: $reversedString<br>";
     // 4. Tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()
     $substring4 = "muôn";
     $position = strpos($string, $substring4);
     if ($position !== false) {
         echo "4. Chuỗi con '$substring4' được tìm thấy trong chuỗi '$string' tại vị trí: $position<br>";
     } else {
         echo "4. Chuỗi con '$substring4' không được tìm thấy trong chuỗi '$string'<br>";
     }
     // 5. Thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace()
     $search = "tuyệt";
     $replace = "vời";
     $newString = str_replace($search, $replace, $string);
     echo "5. Chuỗi mới sau khi thay thế là: $newString<br>";
     // 6. Kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()
     $prefix = "Hello";
     $length6 = strlen($prefix);
     if (strncmp($string, $prefix, $length6) === 0) {
         echo "6. Chuỗi '$string' bắt đầu với chuỗi con '$prefix'<br>";
     } else {
         echo "6. Chuỗi '$string' không bắt đầu với chuỗi con '$prefix'<br>";
     }
     // 7. Chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()
     $upperString = strtoupper($string);
     echo "7. Chuỗi viết hoa: $upperString<br>";
     // 8. Chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower()
     $lowerString = strtolower($string);
     echo "8. Chuỗi viết thường: $lowerString<br>";
     // 9. Chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()
     $capitalizedString = ucwords($string);
     echo "9. Chuỗi in hoa chữ cái đầu tiên của mỗi từ: $capitalizedString<br>";
     // 10. Loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
     $trimmedString = trim($string);
     echo "10. Chuỗi sau khi loại bỏ khoảng trắng: '$trimmedString'<br>";
     // 11. Loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
     $trimmedLeftString = ltrim($string);
     echo "11. Chuỗi sau khi loại bỏ ký tự đầu tiên: '$trimmedLeftString'<br>";
     // 12. Loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim()
     $trimmedRightString = rtrim($string);
     echo "12. Chuỗi sau khi loại bỏ ký tự cuối cùng: '$trimmedRightString'<br>";
     // 13. Tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
     $string13 = "Hello,World,PHP";
     $array13 = explode(",", $string13);
     echo "13. Mảng sau khi tách chuỗi: ";
     print_r($array13);
     // 14. Nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
     $array14 = ["Hello", "World", "PHP"];
     $string14 = implode(" ", $array14);
     echo "14. Chuỗi sau khi nối: $string14<br>";
     // 15. Thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
     $string15 = "Hello";
     $paddedString = str_pad($string15, 10, "!", STR_PAD_RIGHT);
     echo "15. Chuỗi sau khi thêm ký tự: '$paddedString'<br>";
     // 16. Kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
     $string16 = "Vietnam muon nam";
     $substring16 = "World!";
     $found = strrchr($string16, $substring16[0]);
     if ($found === $substring16) {
         echo "16. Chuỗi '$string16' kết thúc với chuỗi con '$substring16'<br>";
     } else {
         echo "16. Chuỗi '$string16' không kết thúc với chuỗi con '$substring16'<br>";
     }
     // 17. Kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
     $string17 = "Vietnam muon nam";
     $substring17 = "World";
     if (strstr($string17, $substring17)) {
         echo "17. Chuỗi '$string17' chứa chuỗi con '$substring17'<br>";
     } else {
         echo "17. Chuỗi '$string17' không chứa chuỗi con '$substring17'<br>";
     }
     // 18. Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
     $string18 = "Vietnam muon nam 123";
     $replacedString = preg_replace("/[^a-zA-Z0-9]/", "*", $string18);
     echo "18. Chuỗi sau khi thay thế: $replacedString<br>";
     // 19. Kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()
     $string19 = "123";
     if (ctype_digit($string19)) {
         echo "19. Chuỗi '$string19' là một số nguyên.<br>";
     } else {
         echo "19. Chuỗi '$string19' không phải là một số nguyên.<br>";
     }
     // 20. Kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
     $email = "dinhhung@gmail.com";
     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo "20. Chuỗi '$email' là một email hợp lệ.<br>";
     } else {
         echo "20. Chuỗi '$email' không phải là một email hợp lệ.<br>";
     }
    
    ?>
</body>
</html>