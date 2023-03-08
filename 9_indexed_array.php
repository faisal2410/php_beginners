<?php
/*
An indexed array in PHP is an array that stores elements with a numeric index, starting from 0. The index of each element is automatically generated based on the position of the element in the array. 
*/ 

$fruits = array( "apple", "banana", "cherry" );

// echo $fruits[0]; // outputs "apple"
// echo PHP_EOL;
// echo $fruits[1]; // outputs "banana"
// echo PHP_EOL;
// echo $fruits[2]; // outputs "cherry"

// $fruits[1] = "orange";

$fruits[6]="mango";
// print_r($fruits);

// unset( $fruits[1] ); //delete element
// print_r($fruits);

// echo PHP_EOL;

// $j=count($fruits);

// for ( $i = 0; $i < $j; $i++ ) {
//     echo $fruits[$i] . PHP_EOL;
// }


// foreach ( $fruits as $fruit ) {
//     echo $fruit . PHP_EOL;
// }
