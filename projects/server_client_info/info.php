<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server and Client Information</title>
</head>
  <body>
    <h1>Server and Client Information</h1>
    <?php
    // Display server information
    echo "<h2>Server Information:</h2>";
    echo "<ul>";
    echo "<li>Server Name: " . $_SERVER['SERVER_NAME'] . "</li>";
    echo "<li>HTTP Host: " . $_SERVER['HTTP_HOST'] . "</li>";
    echo "<li>Script Name: " . $_SERVER['SCRIPT_NAME'] . "</li>";
    echo "<li>Server Port: " . $_SERVER['SERVER_PORT'] . "</li>";
    echo "<li>Remote Address: " . $_SERVER['REMOTE_ADDR'] . "</li>";
    echo "<li>Request URI: " .  $_SERVER['REQUEST_URI'] . "</li>";
    echo "<li>Request Method: " .  $_SERVER['REQUEST_METHOD'] . "</li>";
    echo "<li>Server Software: " .  $_SERVER['SERVER_SOFTWARE'] . "</li>";    
    echo "</ul>";
    
    // Display client information
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      echo "<h2>Client Information:</h2>";
      echo "<ul>";
      echo "<li>User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "</li>";
      echo "<li>Name: $name</li>";
      echo "<li>Email: $email</li>";
      echo "</ul>";
    } else {
      echo "<p>Error: invalid form submission method.</p>";
    }
    ?>
  </body>
</html>
