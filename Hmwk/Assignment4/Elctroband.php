<?php
/*		Sandy Baldwin
		Sept. 29th, 2014
		Purpose: Electromagnetic spectrum homework
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Electromagnetic Spectrum</title>
</head>

<body>
<?php

	//Input the data from the form
	$Frequency = $_GET['Frequency'];
?>
<?php

	//ECHO out a heading
      echo "<h1>The Electromagnetic Spectrum Band</h1>";
?>
<table width+"200" border="1">
        
   <tr>
	<th>Radio</th>
	<th>Microwave</th>
	<th>Infared</th>
	<th>Visiable</th>
	<th>Ultraviolet</th>
	<th>X-ray</th>
	<th>Gamma Ray</th>
   </tr>
<?php
	//1-dimensional array
	$band = array( "Radio", "Radio","Radio","Radio","Microwave","Microwave","Microwave","Microwave", "Infrared", "Visiable", "Visiable", "Ultraviolet","Ultraviolet", "X-Ray", "X-Ray","Gamma Ray" );
	
	$wavelength = array();
	for($i = 1; $i <= 16; ++$i)
		$wavelength[$i-1] = pow( 10, (4-$i) );

	for($i = 1; $i <= 16; ++$i) {
	 	echo "<tr><td>".$i."</td><td>";
	 	echo $wavelength[$i-1]."</td><td>";
		echo $band[$i-1]."</td></tr>\n";
	}
?>
</table>


<?php
	//Output the requested number 
	echo "The requested number is ".$Frequency."<br />";
	echo "The wavelength is ".$wavelength[$Frequency-1]."<br />";
	echo "The band is ".$band[$Frequency-1]."<br />";
?>
</p>
<br />
<img src="wavelength.png" />
</body>
</html>