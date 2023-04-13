<?php
function html_header($pageTitle)
{
	echo "<html><title> $pageTitle </title></head>";
	echo "<body>";
}

function html_h1($text)
{
	echo "<h1> $text </h1>";
}

function html_h2($note)
{
	echo "<h2> $note </html_h2>";
}

function html_footer()
{
	echo "</body>";
	echo "</html>";
}

function calculatetax($salary, $rate=40, $taxAllowance)
{
	$tax = ($salary - $taxAllowance) * ($rate/100);
	return $tax;
}

?>
