<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	// Connect to server and select database
	
    $mysqli = new mysqli('localhost','root','','db1_jess');
   
	// Execute sql statement		

	$sql = "SELECT * from test";
	
	// Execute sql statement
	
    $result = $mysqli->query($sql);

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>