<?php

date_default_timezone_set("America/New_York");

echo "<br>";
print_r($_POST);
echo "<br>";


// Get user input
if(isset($_POST['num_words'])){ 
	$num_words = $_POST['num_words']; 
} else {
	$num_words = "3";
}
$include_special_symbol = isset($_POST["include_special_symbol"]);
$include_number 		= isset($_POST["include_number"]);
$capitalize_first_word 	= isset($_POST["capitalize_first_word"]);

// Validate user input
if ((!is_numeric($num_words) || $num_words > 10 || $num_words < 1)){
	//Throw error
	echo "ERROR";

} else {

	// Get words from dictionary
	$words = get_dictionary_words($num_words);

	// Generate password
	$first_word = array_pop($words);

	if ($include_number){
		$random_number = rand(1, 99);
		array_push($words, $random_number);
	}
	if ($include_special_symbol){
		$special_symbols = array("!", "@", "#", "$", "%", "&", "*", "~", "?");
		$rand_symbols_index = rand(0, count($special_symbols) - 1);
		array_push($words, $special_symbols[$rand_symbols_index]);
	}
	if ($capitalize_first_word){
		$first_word = ucfirst($first_word);
	}

	//Output 
	shuffle($words);
	echo $first_word . (count($words) > 0 ? "-" . join("-", $words) : "");

}

function get_dictionary_words($num_words){
	$filename = "brit-a-z.txt";
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);

	$dictionary_words = explode("\n", $contents);

	shuffle($dictionary_words);

	$word_array = array();

	$i = 0;

	while ($i < $num_words){
		$dictionary_word = trim(array_pop($dictionary_words));
		if (ctype_alpha($dictionary_word)){
			array_push($word_array, $dictionary_word);
			$i++;
		}
	}
	return $word_array;
}
