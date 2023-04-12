<?php
session_start();
//Connect to Server
$mysqli = new mysqli('localhost','root','','db1_jess');


// Update query
$sql = "UPDATE test SET name = '$_POST[txtname]', 
email = '$_POST[txtemail]',
phone_number = '$_POST[txttelno]'
WHERE ID = '$_SESSION[id]'";


    // Execute query
    $result = $mysqli -> query($sql);

    

        if ($result) {
           echo "Successfully Saved!";
        }    
    
        header('Location: wk6ex2.php');
        exit();
  
?>