<?php 
    $mymarks["CO558"] = 82;
    $mymarks["CO556"] = 79;
    $mymarks["CO567"] = 77;
    $mymarks["CO550"] = 78;
    $mymarks["CO551"] = 60;
    $mymarks["CO557"] = 65;

    $total = 0;
  
foreach ($mymarks as $index => $value)
{
    echo "For $index module my final mark was $value points. <br/>";
}

foreach ($mymarks as $index => $value)
{
 $total = $total + $mymarks[$index];
}

    $average = $total /  6; 
    echo "</br> My average mark is $average ";
 
?>



