<?php include("class_lib.php"); ?>
<?php 
	$jessica = new person();
	$jimmy = new person;
 
	$jessica->set_name("Jessica Leach");
	$jimmy->set_name("Nick Waddles");
 
	echo "Jessica's full name: " . $jessica->get_name();
	echo "Jimmy's full name: " . $jimmy->get_name(); 
?>