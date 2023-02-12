<?php
/*
A multidimensional array in PHP is an array that contains one or more arrays as its elements. Each of these arrays can be thought of as a separate dimension in the multidimensional array.

*/ 


$students = array(
    array( "name" => "John", "age" => 20, "grade" => 80 ),
    array( "name" => "Jane", "age" => 18, "grade" => 90 ),
    array( "name" => "Jim", "age" => 22, "grade" => 85 ),
);


// foreach ( $students as $student ) {
//     foreach ( $student as $key => $value ) {
//         echo $key . ": " . $value . PHP_EOL;
//     }
//     echo PHP_EOL;
// }

/*
name: John
age: 20
grade: 80

name: Jane
age: 18
grade: 90

name: Jim
age: 22
grade: 85



*/ 

for ( $i = 0; $i < count( $students ); $i++ ) {
    echo "Name: " . $students[$i]["name"] . PHP_EOL;
    echo "Age: " . $students[$i]["age"] . PHP_EOL;
    echo "Grade: " . $students[$i]["grade"] . PHP_EOL . PHP_EOL;
}



