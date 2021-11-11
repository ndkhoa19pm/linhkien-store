<?php
    $sName = "localhost";

    $uName = "root";

    $pass = "";

    $db_name = "linhkien-store";
    $dsn = "mysql:host=$sName;dbname=$db_name;charset=UTF8";


    try {
        $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      } catch(PDOException $e) {
        echo "Kết Nối Thất bại: " . $e->getMessage();
      }

