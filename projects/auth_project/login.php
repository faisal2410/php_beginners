<?php
session_start();

$valid_username = "faisal";
$valid_password = "123456";

if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ( $username == $valid_username && $password == $valid_password ) {
        $_SESSION['username'] = $username;
        header( "Location: welcome.php" );
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
