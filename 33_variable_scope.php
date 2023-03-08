<?php

// Global variable
$global_variable = "I'm a global variable";


// Function to access global variable
function access_global_variable() {
    global $global_variable;
    echo $global_variable;
}

// Function to declare local variable
function local_variable() {
    $local_variable = "I'm a local variable";
    echo $local_variable;
}

// Function with parameters
function parameters( $param1, $param2 = "default value" ) {
    echo "Param 1: $param1";
    echo "\nParam 2: $param2";
}

// Function that returns a value
function return_value() {
    return "I'm a return value";
    // echo "I'm a return value";
}




// Function with a static variable
function static_variable() {
     static $static_variable = 0;
    $static_variable++;
    echo $static_variable;
}

// Call functions to demonstrate variable scopes
// access_global_variable();
// echo "\n";
// local_variable();
// echo "\n";
// parameters( "Value 1", "Value 2" );
// echo "\n";
// $return_value = return_value();
// echo $return_value;
// echo "\n";
// static_variable();
// echo "\n";
// static_variable();
// echo "\n";


/*
Output :
=========
I'm a global variable
I'm a local variable
Param 1: Value 1
Param 2: Value 2
I'm a return value
1
2



*/ 