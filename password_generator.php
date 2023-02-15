<!DOCTYPE html>
<html>
<head>
	<title>Random Password Generator</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}

		h1, h2 {
			margin-bottom: 20px;
		}

		form {
			margin-bottom: 20px;
		}

		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type="number"] {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border: 2px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 20px;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		button:hover {
			background-color: #45a049;
		}

		.password {
			background-color: #f2f2f2;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 4px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Random Password Generator</h1>
		<form method="post">
			<label for="length">Password length:</label>
			<input type="number" name="length" id="length" min="1" max="20" value="8" required>
			<button type="submit">Generate password</button>
		</form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$length = $_POST["length"];
			$password = generate_password($length);
			echo '<div class="password"><p>Your random password is:</p>';
			echo '<p>' . $password . '</p></div>';
		}

		function generate_password($length) {
		    // define possible characters
		    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";

		    // get the number of possible characters
		    $num_chars = strlen($chars);

		    // initialize the password string
		    $password = "";

		    // loop to generate random password
		    for ($i = 0; $i < $length; $i++) {
		        $password .= $chars[rand(0, $num_chars - 1)];
		    }

		    // return the password
		    return $password;
		}
		?>
	</div>
</body>
</html>
