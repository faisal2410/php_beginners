<?php
/*
A three-dimensional array in PHP is an array that contains one or more arrays, each of which contains one or more arrays. Each of these arrays can be thought of as a separate dimension in the three-dimensional array.

Three-dimensional arrays are useful when you need to store complex data structures that have multiple levels of organization and relationships between elements. By nesting arrays within arrays within arrays, you can represent even more complex data structures in a flexible and organized manner.

*/ 

$students = array(
    array(
        array( "name" => "John", "age" => 20, "grade" => 80 ),
        array( "name" => "Jane", "age" => 18, "grade" => 90 ),
    ),
    array(
        array( "name" => "Jim", "age" => 22, "grade" => 85 ),
        array( "name" => "Jack", "age" => 21, "grade" => 87 ),
    ),
);


// foreach ( $students as $group ) {
//     foreach ( $group as $student ) {
//         foreach ( $student as $key => $value ) {
//             echo $key . ": " . $value . PHP_EOL;
//         }
//        echo PHP_EOL;
//     }
//    echo PHP_EOL;
// }


// using array indexing:

for ( $i = 0; $i < count( $students ); $i++ ) {
    for ( $j = 0; $j < count( $students[$i] ); $j++ ) {
        echo "Name: " . $students[$i][$j]["name"] . PHP_EOL;
        echo "Age: " . $students[$i][$j]["age"] . PHP_EOL;
        echo "Grade: " . $students[$i][$j]["grade"] . PHP_EOL . PHP_EOL;
    }
    echo PHP_EOL;
}


