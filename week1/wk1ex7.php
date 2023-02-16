<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
	
    $onepercent = $gross / 100;
    $twentytwopercent = $onepercent * 22;
    $net = $gross - $twentytwopercent;
    echo $net;
    

?>
</body>
</html>
