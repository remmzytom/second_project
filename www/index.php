<?php
//echo $_SERVER['REQUEST_URI'];
session_start();
$application_name = "remmzys web";
//echo dirname(dirname(__FILE__));

define("APP_PATH",dirname(dirname(__FILE__)));

//var_dump(APP_PATH);
//Add Database connection
// echo "I am Remzy";
include APP_PATH."/model/model.php";
include APP_PATH."/controller/controller.php";
include APP_PATH."/routes/router.php";

 ?>
