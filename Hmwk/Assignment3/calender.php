<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calender</title>
</head>
<body>
<form action="calender.php"method="post">
<?php #script 2.6, 2.9 - calender.php

// This script makes three pull down menus
// for an HTML form: months days,years.

// Make the month array:
$months = array (1=> 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

// Make the days and years arrays:
//$days = range (1,31);
//$years = range (2011, 2021);

// Make the months pull-down menu:
	echo '<select name="month">';
	foreach ($month as $key => $value) {
	echo "<option value=\"$key\">
	$value</option>\n";
}
	echo '</select>';

// Make the days pull-down menu:
	echo '<select name="day">';
	for ($day = 1; $day <= 31; $day++) {
		echo "<option value=\"$day\">
		$day</option>\n";
	//foreach ($days as $value) {
	//echo "<option value=\"$value\">
	//$value</option>\n";
}
	echo '</select>';
	
	// Make the years pull-down menu:
	echo '<select name="year">';
	for ($year = 2011; $year <= 2021; $year++) {
		echo "<option value=\"$year\">
		$year</option>\n";
	//foreach ($years as $value) {
	//echo "<option value=\"$value\">
	//$value</option>\n";
}
	echo '</select>';

?>
</body>
</html>