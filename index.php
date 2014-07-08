<!DOCTYPE html>
<html>
	<head>
		<title>P2:PHP Basics - Laura Filman - Dynamic Web Applications</title>
		<meta charset="utf-8">
		
		<?php require "logic.php"; ?>

		<link rel="stylesheet" href="styles.css" type="text/css">
	</head>
	<body class = "wrap">
		<div class = "wrap_left">
			<div>
				<h1>Password Generator</h1>
				<a href = "http://xkcd.com/936/">
					<img src="http://imgs.xkcd.com/comics/password_strength.png" alt="XKCD password strength" title="XKCD password strength" width="500" height="375">
				</a>
			</div>

		</div>
		<div class = "wrap_right">
			<div>
				<h2>Steps:</h2>
				<ol>
					<li>Read XKCD's comic on creating memorable passwords</li>
					<li>Modify password constraints</li>
					<li>Click resubmit!</li>
				</ol>
			</div>
			<div class="user_input">
				<h2>Password Constraints:</h2>
				<form action="index.php" method="POST">
					<div>Number of words (within 1 to 10): <input type="text" name="num_words" id="num_words" value=<?php echo "'" . $num_words . "'";?> >
						<div class="indented_error"><?php if ($num_words_error) echo "Please enter a number from 1 to 10."; ?></div>
					</div>
					<div>Include special symbol (eg. @): <input type="checkbox" name="include_special_symbol" id="include_special_symbol" <?php if ($include_special_symbol) {echo "checked";} ?>></div>
					<div>Include number: <input type="checkbox" name="include_number" id="include_number" <?php if ($include_number) {echo "checked";} ?>></div>
					<div>Capitalize first word: <input type="checkbox" name="capitalize_first_word" id="capitalize_first_word" <?php if ($capitalize_first_word) {echo "checked";} ?>></div>
					<input type="submit" value="Resubmit" style="float: right; margin-right: 20px">
				</form>
			</div>
			<br>
			<br>
			<div class="results">
				<?php echo $password?>
			</div>
		</div>

	</body>

	
</html>