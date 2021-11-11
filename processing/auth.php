<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    include "db_conn.php";
    include "func_validation.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $text = "Email";
    $location = "../login.php";
    $ms = "error";
    is_empty($email , $text , $location , $ms , "");

    $text = "Password";
    $location = "../login.php";
    $ms = "error";
    is_empty($password , $text , $location , $ms , "");


    $sql = "SELECT * FROM nhanvien WHERE email =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch();
        $user_id = $user['ID'];
        $user_email = $user['email'];
        $user_matkhau = $user['MatKhau'];
        $user_chucvu = $user['ChucVu'];
        $user_hoten = $user['HoTen'];

        if($email === $user_email){
            if(password_verify($password,$user_matkhau))
            {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_email'] = $user_email;
                $_SESSION['user_matkhau'] = $user_matkhau;
                $_SESSION['user_chucvu'] = $user_chucvu;
                $_SESSION['user_hoten'] = $user_hoten;
                header("Location: ../index.php");
            }else{
                $em = "Tên Đăng Nhập Hoặc Mật Khẩu Không Chính Xác";
                header("Location: ../login.php?error=$em");
            }
        }else{
            $em = "Tên Đăng Nhập Hoặc Mật Khẩu Không Chính Xác";
            header("Location: ../login.php?error=$em");
        }
    } else {
        $em = "Tên Đăng Nhập Hoặc Mật Khẩu Không Chính Xác";
        header("Location: ../login.php?error=$em");
    }
}else{
    header("Location: index.php");
}
