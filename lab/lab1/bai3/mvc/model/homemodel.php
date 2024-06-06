<?php

function get_user($email){
    require_once "./mvc/config/dbconfig.php";
    $conn = new Database();
    $sql = "SELECT * FROM lab1_3 WHERE email = ?";
    $stmt = $conn->conn->prepare($sql);
    // $stmt->bind_param("s",$email);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!empty($result)){
        return $result;
    }else{
        return "Không tìm thấy tài khoản";
    }
}
