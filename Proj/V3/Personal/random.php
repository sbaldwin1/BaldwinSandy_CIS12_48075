<?php // testing something random codes
require ('includes/config.inc.php'); 
$page_title = 'Random';
include ('includes/header.html');
?>

<p>
<?php

     
 
        class Sandy {
          public static function need(){
             echo " What the **** going on in here?";
            }
        }
        class Doctor extends Sandy {
            const baseball = 11;
        }

        echo Doctor::need();
        echo Doctor::baseball;
      ?>
    </p>

<?php
//to find out what the browser are you currently using
    $browser = $_SERVER ['HTTP_USER_AGENT'];
    echo "<b>Your browser is</b>: " . $browser;
?>









<?php


//fun stuff, this code will redirect you other page via using preg_match
$visitor = $_SERVER['REMOTE_ADDR'];
if (preg_match("/192.168.0.1/",$visitor)) {
      header('Location: http://www.google.com');
} else {
      header('Location: http://www.espn.com');
};
exit();

?>

<?php
include ('includes/footer.html');
?>