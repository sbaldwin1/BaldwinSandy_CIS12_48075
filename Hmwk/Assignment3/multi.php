<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multidimensional Arrays</title>
</head>
<body>
<p>Some North American States, Provinces, and Territories:</p>
<?php # Script 2.7 - multi.php

// create one array:
$mexico = array(
'YU' => 'Yucatan',
'BC' => 'Baja California',
'OA' => 'Oaxaca'
);

// create another array:
$us = array(
'MD' => 'Maryland',
'IL' => 'Illinois',
'PA' => 'Pennsylvania',
'IA' => 'Iowa'
);

// create third array:
$canada = array(
'QU' => 'Quebec',
'AB' => 'Alberta',
'NT' => 'Northwest Territories',
'YT' => 'Yukon',
'PE' => 'Prince Edward Island'
);

// Combine the arrays:
$n_america = array(
'Mexico' => $mexico,
'United States' => $us,
'Canada' => $canada
);

// Loop through the countries:
foreach ($n_america as $country => $list) {
	
	//Print a heading:
	echo "<h2>$country</h2><ul>";
	
	//Printeach state, provience, or territory:
	foreach ($list as $k => $v) {
		echo "<li>$k - $v</li>\n";
	}
	// Close the list:
	echo '</ul>';
} //end of main FOREACH.



?>
</body>
</html>