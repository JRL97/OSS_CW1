<?php
session_start();
//Connect to Server
$mysqli = new mysqli('localhost','root','','db1_jess');


// DELETE query
$sql = "DELETE FROM test WHERE ID = '$_SESSION[id]'";


    // Execute query
    $result = $mysqli -> query($sql);

    

       
    
        header('Location: wk6ex2.php');
        exit();
  
?>