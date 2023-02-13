<?php

/*
Most commonly used debugging tools and functions in PHP
========================================================
error_reporting: This function sets the error reporting level for your script. You can use it to control which types of errors are displayed and logged.

ini_set: This function allows you to change the value of a configuration directive at runtime. For example, you can use it to change the value of the display_errors directive to enable or disable error messages.

trigger_error: This function allows you to trigger an error from within your code. This is useful for debugging and for generating custom error messages.

assert: This function tests a given expression and triggers an error if the expression is false. This is useful for verifying that variables have the expected values, for example.

var_dump: This function prints out the contents of a variable, including its type and size. This is useful for inspecting the contents of arrays and objects.

print_r: This function prints out the contents of a variable in a more human-readable format than var_dump.

debug_backtrace: This function generates an array of information about the calls made to the functions in your script, including the name of the function, the file it was called from, the line number, and the arguments passed to the function.

error_log: This function allows you to log error messages and other information to a log file or to a system log, such as the syslog on Unix-based systems.


*/ 
/*
Debugging functions in PHP can be a challenging task, but there are several tools and techniques that can make it easier. Here are a few tips and examples to help you debug your PHP functions:
var_dump(),error_log(), debug_backtrace()

*/ 

/*
Use var_dump(): 
=============
The var_dump() function in PHP is a powerful tool for debugging. It displays information about variables, including their type, value, and size.
*/ 


// $var = "Hello World";
// var_dump( $var );

/*
Output
======
string(11) "Hello World"

*/ 

/*
Use error_log(): 
================

The error_log() function in PHP can be used to log errors to a file or email.

The error_log function in PHP is a way to log error messages and other information to a log file or to a system log, such as the syslog on Unix-based systems. This function is useful for debugging and for tracking problems that occur in your code.

*/ 

// function divide( $a, $b ) {
//     if ( $b == 0 ) {
//         error_log( "Division by zero", 0 );
//         return false;
//     } else {
//         return $a / $b;
//     }
// }

// $result = divide( 10, 0 );


// Example 2 :

// $filename = '/path/to/error.log';

// $message = 'An error occurred: Unable to open file';
// error_log( $message, 3, $filename );


/*
In this example, the error_log function is used to log a message to a log file located at /path/to/error.log. The second argument, 3, specifies that the message should be written to a file. The third argument, $filename, specifies the path to the log file.

The error_log function has several options for the second argument that determine where the log message is written:

0: log messages are sent to the system log. On Unix-based systems, this is usually the syslog.
1: log messages are sent to the system log and to an email address specified in the third argument.
2: log messages are sent to a system log. On Windows systems, this is usually the Event Viewer.
3: log messages are written to a file specified in the third argument.
It's important to note that the error_log function is not a substitute for proper error handling. It should be used in conjunction with other error handling techniques, such as try/catch blocks and error reporting settings, to ensure that your code is robust and handles errors in a graceful manner.
*/ 



/*
debug_backtrace():
Use the debug_backtrace() function: The debug_backtrace() function in PHP can be used to print a backtrace of function calls.

The debug_backtrace() function in PHP is a powerful tool for debugging your code. It generates an array of information about the calls made to the functions in your script, including the name of the function, the file it was called from, the line number, and the arguments passed to the function. This information can be used to trace the flow of control through your code and identify where problems are occurring.
*/ 





function func1() {
    func2();
}

function func2() {
    $backtrace = debug_backtrace();
    print_r( $backtrace );
}

func1();




/*
Output:
=======
Array
(
    [0] => Array
        (
            [file] => /path/to/script.php
            [line] => 11
            [function] => func2
            [args] => Array
                (
                )

        )

    [1] => Array
        (
            [file] => /path/to/script.php
            [line] => 7
            [function] => func1
            [args] => Array
                (
                )

        )

)


*/ 





