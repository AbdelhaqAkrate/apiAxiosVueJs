<?php
require "./Controller.php";

$test=new Controller();
$method=$_SERVER["REQUEST_METHOD"];
switch($method)
 {
     case 'GET':    $test->categories();
        break;
     case 'POST':
        $name = $_POST['name'];
        if(isset($name))
         {
             $test->addCat($name);
            }
            break;
 }

