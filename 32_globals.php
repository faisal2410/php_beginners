<?php
// In PHP, $GLOBALS is a superglobal variable that is available in all scopes of a PHP script. It is an associative array that contains references to all variables that are currently defined in the global scope of the script. This means that any variable that is defined outside a function or a class method can be accessed using $GLOBALS within that function or method.

// Here is an example that demonstrates how to use $GLOBALS to access a global variable within a function:


$global_variable = 10;

function test_function() {
    global $global_variable;
    echo $global_variable;
}

test_function(); // Outputs 10
// In the above example, we define a global variable $global_variable and a function test_function() that prints the value of the global variable. To access the global variable inside the function, we use the global keyword to import the variable into the function's scope.

// Real-life use cases for $GLOBALS include:

// Debugging: $GLOBALS can be useful for debugging your PHP code by allowing you to inspect the values of global variables from within a function or method.

// Configuration settings: You can use $GLOBALS to store configuration settings for your PHP application that can be accessed from any part of your code. For example:


$GLOBALS['database_host'] = 'localhost';
$GLOBALS['database_user'] = 'root';
$GLOBALS['database_password'] = 'password';

// Keeping track of global state: In some cases, you may need to keep track of the global state of your PHP application. $GLOBALS can be used to store state information that can be accessed from any part of your code. For example:

$GLOBALS['is_logged_in'] = true;

// In summary, $GLOBALS is a superglobal variable in PHP that can be used to access global variables from within a function or method. It can be useful for debugging, storing configuration settings, and keeping track of global state.



