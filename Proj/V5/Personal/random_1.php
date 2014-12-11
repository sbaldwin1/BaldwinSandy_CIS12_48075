<?php 

$page_title = 'Other random stuff';
include ('includes/header.html');
?>

<center>
<?php
// Create an array and push on the friends
$friend = array();
array_push($friend, "john");
array_push($friend, "betty");
array_push($friend, "kevin");
array_push ($friend, "michelle");
array_push($friend, "estella");
array_push($friend, "melissa");
array_push($friend, "ian");
array_push($friend, "ezra");
array_push ($friend, "errol");
array_push($friend, "victoria");
array_push($friend, "humphrey");
array_push($friend, "lauren");
array_push($friend, "michael");
array_push($friend, "alex");
array_push($friend, "lebron");
array_push($friend, "jones");
array_push ($friend, "james");
array_push($friend, "nigel");
array_push($friend, "stephen");
array_push($friend, "zelda");
array_push($friend, "link");
array_push($friend, "sara");
array_push($friend, "lara");
array_push($friend, "sireena");
array_push($friend, "tiffany");
array_push($friend, "xeno");
array_push($friend, "bogie");
array_push($friend, "mark");
array_push($friend, "link");
array_push($friend, "joel");
array_push($friend, "jerry");
array_push($friend, "terry");
array_push($friend, "mickey");
array_push($friend, "david");
array_push($friend, "strasburg");
array_push($friend, "wood");
array_push($friend, "emma");
array_push($friend, "freddie");
array_push($friend, "freeman");
array_push($friend, "chipper");
array_push($friend, "clark");
array_push($friend, "kent");
array_push($friend, "alvin");
array_push($friend, "shane");
array_push($friend, "rocky");
array_push($friend, "frank");
array_push($friend, "william");
array_push($friend, "austin");
array_push($friend, "rintin");
array_push($friend, "jojo");
array_push($friend, "joey");
array_push($friend, "lassie");
array_push($friend, "seabiscuit");
array_push($friend, "oliver");
array_push($friend, "arthur");
array_push($friend, "dodger");
array_push($friend, "mo");
array_push($friend, "kerry");
array_push($friend, "jon");
array_push($friend, "thomas");
array_push($friend, "rochelle");
array_push($friend, "miggy");
array_push($friend, "cat");
array_push($friend, "arina");
array_push($friend, "rina");
array_push($friend, "miguel");
array_push($friend, "olivia");
array_push($friend, "peter");
array_push($friend, "mindy");

echo "<p>I have  </p>"; echo count($friend); echo "<p> friends</p>"; echo "<p>and I have to pick one who is my best friend!! </p>"; 
echo "<p>Drum roll please!</p>";
echo "<p>*drum rolls*  </p>";  


// Sort the list
echo sort ($friend);

// Randomly select a my best friend
$pickone = $friend[rand(0, count($friend) - 1)];
echo "<p>My only best friend is... </p>";
echo strtoupper($pickone);

?>
</p></center>

<?php include ('includes/footer.html'); ?>