<?php   
    function get_all_user($con){
        $sql = "SELECT * FROM nhanvien";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $nhanvien = $stmt->fetchAll();
        }else{
            $nhanvien = 0;
        }
        return $nhanvien;
    }
?>