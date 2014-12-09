<?php // testing something random codes
require ('includes/config.inc.php'); 
$page_title = 'Random';
include ('includes/header.html');
?>
<?php
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