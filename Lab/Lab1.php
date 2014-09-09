<!DOCTYPE html>
<html>
    <head>
        <link type='text/css' rel='stylesheet' href='style.css'/>
		<title>PHP FTW!</title>
	</head>
	<body>
        <?php 
        $myName = "Sandy";
        $myAge = 27;
        ?>
        <p>
        <?php
         echo "My name is $myName";
         echo " and I'm $myAge years old.\n";
         echo $myName;
         echo $myAge;
         ?>
        </p>   
	</body>
</html>