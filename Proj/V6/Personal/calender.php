<?php
// This script display calender and time
?>
<?php
require ('includes/config.inc.php'); 
$page_title = 'Calender and Time'; 
include ('includes/header.html'); ?>


<?php
//make calender via array
$monthly = Array("January", "February", "March", "April", "May", "June", "July",
"August", "September", "October", "November", "December");

if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");

$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];
 
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}
?>
<?php
//testing date format
function checkDateFormat($date)
{
    //match the format of the date
    if (preg_match ("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $date, $parts))
    {
        //check weather the date is valid of not
        if(checkdate($parts[2],$parts[3],$parts[1]))
            return true;
        else
        return false;
    }
    else
        return false;
}



?>


<?php
//Making calender
?>
<div align="center">
  <table width="316" height="221">
    <tr align="center"><td bgcolor="#708090" style="color:#DCDCDC">
  <table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>
  <td width="50%" align="left"> <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:#FFFFFF">Previous</a></td><td width="50%" align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:#FFFFFF">Next</a>  
  </td></tr></table></td></tr>
    
  <tr>
  <td align="center">
    <div align="center">
      <table width="100%" border="2" cellpadding="4" cellspacing="">
        <tr align="center">
          <td colspan="6" bgcolor="#708090" style="color:#F8F8FF"><strong><?php echo $monthly[$cMonth-1].' '.$cYear; ?></strong></td></tr><tr>
            <td align="center" bgcolor="#999999" style="color:#FFFFFF">S</td>
            <td align="center" bgcolor="#999999" style="color:#FFFFFF">M</td>
            <td align="center" bgcolor="#999999" style="color:#FFFFFF">T</td>
            <td align="center" bgcolor="#999999" style="color:#FFFFFF">W</td>
            <td align="center" bgcolor="#999999" style="color:#FFFFFF">T</td>
            <td align="center" bgcolor="#999999" style="color:#FFFFFF">F</td>
            <td align="center" bgcolor="#999999" style="color:#FFFFFF">S</td>
            </tr>
        
        <?php
		//use for loop and if else for to get date
$monthexact = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$monthexact);
$thismonth = getdate ($monthexact);
$day = $thismonth['wday'];
for ($i=0; $i<($maxday+$day); $i++) {
    if(($i % 7) == 0 ) echo "<tr>";
    if($i < $day) echo "<td></td>";
    else echo "<td align='center' valign='middle' height='30px'>". ($i - $day + 1) . "</td>";
    if(($i % 7) == 6 ) echo "</tr>";
}
?>
        
        </table>
    </div></td></tr></table><br/>
  <?php
//echo out the time in the format of 00:00:00
echo "<h2>Current time in 24 hour format </h2>";
echo date("G:i:s", strtotime("+0hour")); 

?>
  <br/><br/>
  <?php

echo "<h2>Other fun stuff</h2>";

?>
  

  
</div>

<?php include ('includes/footer.html'); ?>