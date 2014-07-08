<?php

echo "<br>";
print_r($_POST);
echo "<br>";

// Get user input
$num_words 				= $_POST["num_words"];
$include_special_symbol = isset($_POST["include_special_symbol"]);
$include_number 		= isset($_POST["include_number"]);
$capitalize_first_word 	= isset($_POST["capitalize_first_word"]);

//Set of available password words
$words = array ("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");
shuffle($words);

// Generate password
$first_word = array_pop($words);
$password_array = array();
for ($i = 0; $i < $num_words - 1; $i++){
	array_push($password_array, array_pop($words));
}

if ($include_number){
	$random_number = rand(1, 99);
	array_push($password_array, $random_number);
}
if ($include_special_symbol){
	$special_symbols = array("!", "@", "#", "$", "%", "&", "*", "~", "?");
	$rand_symbols_index = rand(0, count($special_symbols) - 1);
	array_push($password_array, $special_symbols[$rand_symbols_index]);
}
if ($capitalize_first_word){
	$first_word = ucfirst($first_word);
}

//Output 
shuffle($password_array);
echo $first_word . (count($password_array) > 0 ? "-" . join("-", $password_array) : "");