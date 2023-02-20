<!DOCTYPE html>
<html>
<head>
	<title>String Manipulation Tool</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}
		.container {
			width: 80%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		h1 {
			margin-top: 0;
		}
		form {
			display: flex;
			flex-wrap: wrap;
			margin-bottom: 20px;
		}
		label {
			width: 100%;
			margin-bottom: 5px;
		}
		input[type="text"], select {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		p {
			font-size: 18px;
			margin: 0;
			padding: 10px;
			background-color: #e6e6e6;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>String Manipulation Tool</h1>
		<form action="string_tool.php" method="post">
			<label for="input_string">Enter a string:</label>
			<input type="text" id="input_string" name="input_string">
			<label for="string_function">Select a function:</label>
			<select id="string_function" name="string_function">
				<option value="strlen">strlen</option>
				<option value="strrev">strrev</option>
				<option value="strtoupper">strtoupper</option>
				<option value="strtolower">strtolower</option>
				<option value="ucfirst">ucfirst</option>
				<option value="ucwords">ucwords</option>
				<option value="trim">trim</option>
				<option value="str_repeat">Repeat 3 times</option>
			</select>
			<input type="submit" value="Manipulate String">
		</form>
		<?php
		if (isset($_POST['input_string']) && isset($_POST['string_function'])) {
			$input_string = $_POST['input_string'];
			$string_function = $_POST['string_function'];

			switch ($string_function) {
				case 'strlen':
					$result = strlen($input_string);
					break;
				case 'strrev':
					$result = strrev($input_string);
					break;
				case 'strtoupper':
					$result = strtoupper($input_string);
					break;
				case 'strtolower':
					$result = strtolower($input_string);
					break;
				case 'ucfirst':
					$result = ucfirst($input_string);
					break;
				case 'ucwords':
					$result = ucwords($input_string);
					break;
				case 'trim':
					$result = trim($input_string);
					break;
				case 'str_repeat':
					$result = str_repeat($input_string,3);
					break;
				default:
					$result = 'Invalid';
}
?>
<h2><?php echo "The result of " . $string_function . " Input: " . $input_string . " Output: " . $result;?></h2>		
<?php		
	}
	?>
</div>

</body>
</html>
