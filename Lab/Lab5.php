<?php
/*
		Sandy Baldwin
		Purpose: Lab section 5 - Loops: For and ForEach
*/

?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $yardlines = array("The 50... ", "the 40... ",
        "the 30... ", "the 20... ", "the 10... ");
        // Write your foreach loop below this line
        
        foreach($yardlines as $item) {
      echo $item;
  }
  
        // Write your foreach loop above this line
        echo "touchdown!";
      ?>
    </p>
  </body>
</html>