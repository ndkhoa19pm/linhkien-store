<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
    include "db_conn.php";



    $HoTen =  $_POST['HoTen'];
    $DiaChi =  $_POST['DiaChi'];
    $SoDienThoai =  $_POST['SoDienThoai'];
    $NgaySinh =  $_POST['NgaySinh'];
    $Email =  $_POST['Email'];
    $MatKhau =  $_POST['MatKhau'];
    $ChucVu =  $_POST['ChucVu'];
    $Khoa =  $_POST['Khoa'];
    $hash = password_hash($MatKhau, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO nhanvien (HoTen, DiaChi, SDT, NgaySinh, email, MatKhau, ChucVu, khoa) VALUES (?,?,?,?,?,?,?,?)";
    $conn->prepare($sql)->execute([$HoTen, $DiaChi, $SoDienThoai,$NgaySinh,$Email,$hash,$ChucVu,$Khoa]);
    header("Location: ../user.php");
}else{
    header("Location: ../login.php");
    exit;
}
?>          