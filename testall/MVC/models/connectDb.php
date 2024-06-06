<?php
$host = 'localhost';
$username = 'root';
$password = '123123';
$dbname = 'wd18401';
$conn = mysqli_connect($host, $username, $password, $dbname);
if(mysqli_connect_errno() != 0) {
    echo "Kết nối không thành công!";
}
?>