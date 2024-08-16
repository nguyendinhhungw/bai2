<!DOCTYPE html>
<html>
<head>
    <title>Form Nhập Họ Tên</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoTen = htmlspecialchars($_POST['hoTen']); 
    echo "<h3>Chào bạn, " . $hoTen . "!</h3>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="hoTen">Họ Tên:</label><br>
    <input type="text" id="hoTen" name="hoTen" required><br><br>
    <input type="submit" value="Gửi">
</form>

</body>
</html>
