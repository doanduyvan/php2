<?php

echo 'hello';

$host = "localhost:3300";
$name = "root";
$pass = "duyvan0311";
$dbName = 'test1';

$conn = new mysqli($host, $name, $pass, $dbName);

print_r($conn);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo 'Connected';
}


$sql = "select * from users";


$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    print_r($row);
    echo "<br>";
}