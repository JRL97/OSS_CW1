<?php	

	// Connect to server and select database
    $mysqli = new mysqli('localhost','root','','db1_jess');

	$sql = "SELECT * FROM test WHERE ID = '$_GET[id]' ";
	// Execute query
    $result = $mysqli->query($sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action="wk6ex3.php?id=?php echo $_GET[id]; ?> " method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row["name"] ?>" />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row["phone_number"] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row["email"] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
</html>

