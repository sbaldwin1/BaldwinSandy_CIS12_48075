<?php 

$page_title = 'Other random stuff';
include ('includes/header.html');
?>

<?php
// Create an array and push on the friends
$friend = array();
array_push($friend, "john");
array_push($friend, "betty");
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



// Sort the list
echo sort ($friend);

// Randomly select a my best friend
$pickone = $friend[rand(0, count($friend) - 1)];
echo "<p>My only best friend is... </p>";
echo strtoupper($pickone);

?>
</p>

<?php include ('includes/footer.html'); ?>