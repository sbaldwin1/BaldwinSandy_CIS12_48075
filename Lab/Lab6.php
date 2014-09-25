<?php
/*
		Sandy Baldwin
		Purpose: Lab section 6 - Loops: While and Do-While
*/

?>
<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
       
    //write your do-while loop below
    $roll = 0;
    do {
        $roll = rand(1,6);
        echo "The dice has been rolled.\n";break;
    } while ($roll != 6);
    echo "The loop has ended!";
        
    ?>
    </body>
</html>