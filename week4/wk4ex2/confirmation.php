<?php
session_start();
$price = 15.75;
$total = $price * $_SESSION["qty"];
   echo "<h2> Your order qty is $_SESSION[qty] </h2></br>";
   echo "<p> $_SESSION[qty] x £$price = £$total </p>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>"
   echo "<h2> Price to Pay is £$total</h2>";
?>
