<?php
define("DBNAME", "second_project");
define("DBUSER", "root");
//define("DBPASS", "remmzytom1706");
define("DBPASS","vagrant");

try{

  $conn = new PDO('mysql:host=localhost;dbname='.DBNAME,DBUSER,DBPASS);

  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOexception $e){
  echo $e->getMessage();
}

 ?>
