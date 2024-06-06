<?php
// require_once "./Database.php";
spl_autoload_register(function($class){
    var_dump($class);
    require_once $class . ".php";
});


use config\Database as DB;
$db = new DB();
echo "<br>";
$db->HelloWorld();
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