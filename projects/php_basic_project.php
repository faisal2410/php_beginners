<!DOCTYPE html>
<html>
<head>
	<title>PHP Basic Functions Project</title>
</head>
<body>
	<h1>PHP Basic Functions Project</h1>

	<?php
		// Array Functions
		$numbers = array(2, 5, 3, 8, 1, 7, 9, 4, 6);
		echo "<h2>Array Functions</h2>";
		echo "<p>Array: " . implode(", ", $numbers) . "</p>";
		echo "<p>Max Value: " . max($numbers) . "</p>";
		echo "<p>Min Value: " . min($numbers) . "</p>";
		echo "<p>Reversed Array: " . implode(", ", array_reverse($numbers)) . "</p>";

		// Math Functions
		$number = 7;
		echo "<h2>Math Functions</h2>";
		echo "<p>Number: " . $number . "</p>";
		echo "<p>Square Root: " . sqrt($number) . "</p>";
		echo "<p>Power of 2: " . pow($number, 2) . "</p>";
		echo "<p>Absolute Value: " . abs(-$number) . "</p>";

		// String Functions
		$text = "This is a sample text";
		echo "<h2>String Functions</h2>";
		echo "<p>Text: " . $text . "</p>";
		echo "<p>Uppercase: " . strtoupper($text) . "</p>";
		echo "<p>Lowercase: " . strtolower($text) . "</p>";
		echo "<p>Word Count: " . str_word_count($text) . "</p>";
	?>
</body>
</html>
