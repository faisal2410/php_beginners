<?php

/*

Function overloading in PHP refers to the ability to have multiple functions with the same name but different parameters. This is not a built-in feature of PHP, but it can be achieved through a variety of techniques.

One common technique to implement function overloading is to use the func_num_args() function to determine the number of arguments passed to a function, and then using a switch statement or if-else blocks to determine which version of the function to call based on the number of arguments.


In this example, the foo() function uses the func_num_args() function to determine the number of arguments passed to it. It then uses a switch statement to determine which version of the function to call based on the number of arguments. The func_get_arg() function is used to retrieve the values of the arguments passed to the function.

It's worth noting that while function overloading can be useful in some cases, it is generally considered a bad practice in PHP. It can make your code more difficult to read and maintain, and can also lead to unexpected behavior if not used carefully. Instead, it's often better to use optional parameters or default values for arguments in your functions.

*/ 



function foo() {
    $num_args = func_num_args();

    switch ( $num_args ) {
    case 0:
        echo 'No arguments were passed.';
        break;
    case 1:
        echo 'One argument was passed: ' . func_get_arg( 0 );
        break;
    case 2:
        echo 'Two arguments were passed: ' . func_get_arg( 0 ) . ' and ' . func_get_arg( 1 );
        break;
    default:
        echo 'More than two arguments were passed.';
        break;
    }
}

foo(); // Outputs: No arguments were passed.
foo( 'hello' ); // Outputs: One argument was passed: hello
foo( 'hello', 'world' ); // Outputs: Two arguments were passed: hello and world
foo( 'hello', 'world', 'how', 'are', 'you' ); // Outputs: More than two arguments were passed.







