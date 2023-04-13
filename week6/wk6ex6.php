<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(13450,12,1500) . " tax";
	html_footer();
?>



