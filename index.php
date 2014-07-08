<?php
error_reporting(-1);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>P2:PHP Basics - Laura Filman - Dynamic Web Applications</title>
		<meta charset="utf-8">
		
		<?php require "logic.php"; ?>

		<link rel="stylesheet" href="styles.css" type="text/css">
	</head>
	<body class="morning">
		<div>
			<div><h1>P2:PHP Basics - Laura Filman - Dynamic Web Applications</h1></div>
			<div>Add explanation here</div>
			<div><img src="http://imgs.xkcd.com/comics/password_strength.png" alt="XKCD password strength" title="XKCD password strength" height="42" width="42"></div>
			<div>
				<form action="index.php" method="POST">
					Number of words: <input type="text" name="num_words" id="num_words" value=<?php echo "'" . $num_words . "'";?> ></br>
					Include special symbol (eg. @): <input type="checkbox" name="include_special_symbol" id="include_special_symbol" <?php if ($include_special_symbol) {echo "checked";} ?>></br>
					Include number: <input type="checkbox" name="include_number" id="include_number" <?php if ($include_number) {echo "checked";} ?>></br>
					Capitalize first word: <input type="checkbox" name="capitalize_first_word" id="capitalize_first_word" <?php if ($capitalize_first_word) {echo "checked";} ?>></br>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</body>

	
</html>