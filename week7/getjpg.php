<?php

  header("Content-Type: image/jpeg");

  $conn = mysqli_connect("localhost", "22133230", "mysqluser", "db3_22133230");

  //$sql = "SELECT image FROM monster WHERE id='" . $_GET[id] ."';";
  $sql = "SELECT image FROM monster WHERE id=1";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["Image"];

  echo $jpg;
?>
