<?php
/*
		Sandy Baldwin
		Purpose: Lab section 7 - Function I
*/

?>
<html>
 <p>
<?php
// Create an array with several elements in it,
// then sort it and print the joined elements to the screen
$array = array("zeta", "alpha", "eta");
sort($array);
print join(",", $array);
?>
</p>
<p>
<?php
// Reverse sort your array and print the joined elements to the screen
rsort($array);
print join(",", $array);
?>
</p>
</html>