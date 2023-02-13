<?php
/*
Anonymous functions, also known as closures in PHP, are functions that are defined without a name. They are created and executed on the fly, and are often used as callback functions. A closure is a special type of anonymous function that can capture variables from its surrounding scope and preserve their values for use within the function.

*/ 


$add = function  ( $a, $b ) {
    return $a + $b;
};

echo $add( 1, 2 ); // Outputs: 3


