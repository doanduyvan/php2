<?php

require_once "./vendor/autoload.php";

use App\Database;
use App\Controllers\HomeController;
$db = new Database();
$db->HelloWorld();
$home = new HomeController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    Home Page
</body>
</html>