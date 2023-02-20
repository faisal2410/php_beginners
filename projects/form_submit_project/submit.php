<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Script</title>
  </head>
  <body>
    <?php
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      echo "<p>Thank you for your submission, $name!</p>";
      echo "<p>Your email address is $email.</p>";
      echo "<p>Your message is:</p>";
      echo "<p>$message</p>";
    } else {
      echo "<p>Error: invalid form submission method.</p>";
    }
    
    // Output query string parameters using $_GET
    if (!empty($_GET)) {
      echo "<h2>Query String Parameters:</h2>";
      echo "<ul>";
      foreach ($_GET as $key => $value) {
        echo "<li>$key: $value</li>";
      }
      echo "</ul>";
    }
    
    // Output all request parameters using $_REQUEST
    if (!empty($_REQUEST)) {
      echo "<h2>All Request Parameters:</h2>";
      echo "<ul>";
      foreach ($_REQUEST as $key => $value) {
        echo "<li>$key: $value</li>";
      }
      echo "</ul>";
    }
    ?>
  </body>
</html>
