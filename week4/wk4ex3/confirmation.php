<?php
session_start();
$price = 0;

switch($_SESSION["size"])
{
   case 'Small':
      $price = 15.75;
      break;
   case 'Medium':
      $price = 16.75;
      break;
   case 'Large':
      $price = 17.75;
      break;
   case 'Extra Large':
      $price = 18.75;
      break;
   default : "No Size Selected";
}

$total = $price * $_SESSION["qty"];
   echo "<h2> Your order qty is $_SESSION[qty] </h2></br>";
   echo "<h3> $_SESSION[qty] * $_SESSION[size] = £$total </h3>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";
   echo "<h2> Price to Pay is £$total</h2>";
?>
