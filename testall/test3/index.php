<?php


include "./laptop.php";

use p2\laptop as test;

$laptop = new test('test');
$laptop1 = new test('hii');

echo "<br>";
echo 'hi';

// echo "pi la: " . p2\PI;


echo "<br>";


// spl_autoload_register(function($class){
//     echo $class . ".php";
//     include_once $class . ".php";
// });

include_once "./class1/abc/abc.php";

use nameabc\abc as abc1; 

$class1 = new abc1();
