<?php
/*		Sandy Baldwin
		Sept. 15th, 2014
		Purpose: Electromagnetic spectrum homework
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Electromagnetic spectrum</title>
</head>
<body>
<h1>The Electromagnetic Spectrum</h1>
<?php
	//Input the data from the form
	$Frequency = $_GET['Frequency'];

?>

	<table width="200" border="1">
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

		if($Frequency < pow(10,3)){
			echo "Radio";
		}else if($Frequency < pow(10,-2)){
			echo "Microwave";
		}else if ($Frequency < pow(10,-5)){
			echo "Infared";
		}else if ($Frequency < pow(10,-6)){
			echo"Visiable";
		}else if ($Frequency < pow(10,-8)){
			echo "Ultraviolet";
		}else if ($Frequency < pow(10,-10)){
			echo "X-ray";
		}else{
			echo "Gamma Ray";
		};
		

?>

</table>
</body>
</html>