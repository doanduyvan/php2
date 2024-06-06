<?php
require('connectDb.php');
function getAllUsers() {
    global $conn;
    return mysqli_query($conn, "select * from users");
}
function getUserById($id) {
    global $conn;
    return mysqli_query($conn, "select * from users where id = " . $id);
}
function insert() {}
function update() {}
function delete() {}
?>