<?php
if(isset($_POST['dangnhap'])) {
    // XỬ LÝ CHỨC NĂNG ĐĂNG NHẬP
    $tentaikhoan = $_POST['tentk'];
    $matkhau = $_POST['mk'];
    require 'model.php';
    $data = tatcataikhoan();
    $ketqua = null;
    while($row = mysqli_fetch_array($data)) {
        if($tentaikhoan === $row['username']) {
            if($matkhau === $row['password']) {
                $ketqua = "ĐĂNG NHẬP THÀNH CÔNG!";
                break;
            } else {
                $ketqua = "SAI MẬT KHẨU";
                break;
            }
        } else {
            $ketqua = "KHÔNG CÓ TÀI KHOẢN NÀY!";
        }
    }
    echo $ketqua;
} else {
    include 'view.php';
}
?>