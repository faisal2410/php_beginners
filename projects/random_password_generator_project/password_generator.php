<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $password_length = $_POST["length"];
    $include_symbols = isset( $_POST["symbols"] );
    $include_numbers = isset( $_POST["numbers"] );
    $available_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $available_symbols = "!@#$%^&*()-_=+";
    $available_numbers = "0123456789";

    if ( $include_symbols ) {
        $available_chars .= $available_symbols;
    }

    if ( $include_numbers ) {
        $available_chars .= $available_numbers;
    }

    $password = "";

    for ( $i = 0; $i < $password_length; $i++ ) {
        $password .= $available_chars[rand( 0, strlen( $available_chars ) - 1 )];
    }

    echo "Your password is: " . $password;
}



?>
