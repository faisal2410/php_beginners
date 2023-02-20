<?php
session_start();

if ( isset( $_SESSION['username'] ) ) {
    $username = $_SESSION['username'];
} else {
    header( "Location: index.html" );
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
	<h1>Welcome, <?php echo $username; ?>!</h1>
	<p>You have successfully logged in.</p>
	<a href="logout.php">Logout</a>
</body>
</html>
