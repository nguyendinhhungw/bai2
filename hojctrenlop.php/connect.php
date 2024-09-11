<?php
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "melody";  

// Tạo kết nối
$dbh = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($dbh->connect_error) {
    die("Kết nối thất bại: " . $dbh->connect_error);
}
echo "Kết nối thành công";
// *** Thêm dữ liệu ***

// $name = "Đình hưng";
// $gender = "Male";
// $contact_no = "035768989";
// $email = "hellochao@gmail.com";
// $city = "Nghe An";
// $country = "Vietnam";

// Chuẩn bị câu lệnh SQL để thêm dữ liệu
// $sql_insert = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) VALUES (?, ?, ?, ?, ?, ?)";

// $stmt = mysqli_prepare($dbh, $sql_insert);
// if (!$stmt) {
//     die("Prepare failed: " . mysqli_error($dbh));
// }

// mysqli_stmt_bind_param($stmt, "ssssss", $name, $gender, $contact_no, $email, $city, $country);

// if (mysqli_stmt_execute($stmt)) {
//     echo "Dữ liệu đã được thêm thành công!<br>";
// } else {
//     echo "Lỗi thêm dữ liệu: " . mysqli_stmt_error($stmt) . "<br>";
// }
// *** Xóa dữ liệu ***

// $id_to_delete = 2; // ID của bản ghi cần xóa

// $sql_delete = "DELETE FROM my_contacts WHERE id = ?";

// $stmt = mysqli_prepare($dbh, $sql_delete);
// if (!$stmt) {
//     die("Prepare failed: " . mysqli_error($dbh));
// }

// mysqli_stmt_bind_param($stmt, "i", $id_to_delete);

// if (mysqli_stmt_execute($stmt)) {
//     echo "Dữ liệu đã được xóa thành công!<br>";
// } else {
//     echo "Lỗi xóa dữ liệu: " . mysqli_stmt_error($stmt) . "<br>";
// }
// *** Cập nhật dữ liệu ***

// $id_to_update = 3; // ID của bản ghi cần cập nhật
// $name = "quoc hung";
// $gender = "Female";
// $contact_no = "0987654321";
// $email = "quochung@gmail.com";
// $city = "Lao Cai";
// $country = "Vietnam";

// // Chuẩn bị câu lệnh SQL để cập nhật dữ liệu
// $sql_update = "UPDATE my_contacts SET full_names = ?, gender = ?, contact_no = ?, email = ?, city = ?, country = ? WHERE id = ?";

// // Chuẩn bị câu lệnh
// $stmt = mysqli_prepare($dbh, $sql_update);
// if (!$stmt) {
//     die("Prepare failed: " . mysqli_error($dbh));
// }

// // Gán giá trị cho các tham số
// mysqli_stmt_bind_param($stmt, "ssssssi", $name, $gender, $contact_no, $email, $city, $country, $id_to_update);

// // Thực thi câu lệnh UPDATE
// if (mysqli_stmt_execute($stmt)) {
//     echo "Dữ liệu đã được cập nhật thành công!<br>";
// } else {
//     echo "Lỗi cập nhật dữ liệu: " . mysqli_stmt_error($stmt) . "<br>";
// }

// *** Thực thi câu lệnh SELECT ***

// $sql_stmt = "SELECT * FROM my_contacts";
// $result = mysqli_query($dbh, $sql_stmt);

// // Kiểm tra nếu thực thi câu lệnh SELECT thành công
// if (!$result) {
//     die("Database access failed: " . mysqli_error($dbh));
// }

// // Hiển thị dữ liệu từ câu lệnh SELECT
// $rows = mysqli_num_rows($result); // Lấy số hàng trả về
// if ($rows) {
//     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//         echo 'ID: ' . $row['id'] . '<br>';
//         echo 'Full Names: ' . $row['full_names'] . '<br>';
//         echo 'Gender: ' . $row['gender'] . '<br>';
//         echo 'Contact No: ' . $row['contact_no'] . '<br>';
//         echo 'Email: ' . $row['email'] . '<br>';
//         echo 'City: ' . $row['city'] . '<br>';
//         echo 'Country: ' . $row['country'] . '<br><br>';
//     }
// }
// // Đóng câu lệnh và kết nối
// // mysqli_stmt_close($stmt);
// mysqli_close($dbh);

//DÙNG PDO
$conn = new PDO("mysql:host=localhost;dbname=melody", "root" );
// Thiết lập chế độ lỗi PDO để ném ngoại lệ
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Dữ liệu để chèn vào bảng
// $name = "alexx";
// $gender = "Male";
// $contact_no = "012345";
// $email = "alex@gmail.com";
// $city = "London";
// $country = "England";

// $stmt = $conn->prepare('INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) VALUES (?, ?, ?, ?, ?, ?)');

// $stmt->execute([$name, $gender, $contact_no, $email, $city, $country]);

// $stmt->bindParam(1,$name);
// $stmt->bindParam(2,$gender);
// $stmt->bindParam(3,$contact_no);
// $stmt->bindParam(4,$email);
// $stmt->bindParam(5,$city);
// $stmt->bindParam(6,$country);
// $stmt_fetch = $conn->prepare('SELECT * from my_contacts');
// $stmt_fetch->setFetchMode(PDO::FETCH_ASSOC);
// $stmt_fetch->execute(array());
// Xóa dữ liệu bằng Id
// $stmt = $conn->prepare('DELETE FROM my_contacts WHERE ID = ?');
// $id = 4;
// $stmt->execute([$id]);
// Dữ liệu mới để cập nhật cho người có ID = 1
// // Chuẩn bị câu truy vấn SELECT
$stmt = $conn->prepare('SELECT * FROM my_contacts');

$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_ASSOC);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Full Names</th><th>Gender</th><th>Contact No</th><th>Email</th><th>City</th><th>Country</th></tr>";

while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['full_names'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['contact_no'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['country'] . "</td>";
    echo "</tr>";
}

echo "</table>";


