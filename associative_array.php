<?php
/*
An associative array in PHP is an array that stores elements with a key-value pair, where the key is a string. The keys are used to access the elements in the array, rather than a numerical index.

associative arrays are also useful for storing complex data structures, such as records or tables, where each row or record can be represented as an associative array with multiple key-value pairs.

Study Reference : https: //www.javatpoint.com/php-associative-array
===============
 */

$fruits = array( "a" => "apple", "b" => "banana", "c" => "cherry" );

// echo $fruits["a"]; // outputs "apple"
// echo $fruits["b"]; // outputs "banana"
// echo $fruits["c"]; // outputs "cherry"

// ==========


// foreach ( $fruits as $item => $fruit ) {
//     echo "Ostad======>". $item;
//     echo PHP_EOL;
// }
// ==========



// $students = array(
//     array( "name" => "John", "age" => 20, "grade" => 80 ),
//     array( "name" => "Jane", "age" => 18, "grade" => 90 ),
//     array( "name" => "Jim", "age" => 22, "grade" => 85 ),
// );
// // ==========

// $students[] = array( "name" => "Joe", "age" => 25, "grade" => 95 );
// print_r($students);
// ==========



// $numbers = array( 4, 8, 15, 16, 23, 42 );
// $numbers = array( 0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42 );
// echo $numbers[0];
// ==========