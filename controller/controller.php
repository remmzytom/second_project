<?php
function fetchData($dbconn){
  $stmt = $dbconn->prepare("SELECT * FROM list");
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    echo "<li>".$row['name']."</li>";
  }
}


 ?>
