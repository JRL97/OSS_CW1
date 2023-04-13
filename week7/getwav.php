<?php

  header("Content-type: audio/wav");

  $conn = mysqli_connect("localhost", "22133230","mysqluser", "db3_22133230");

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>
