<?php
/*
A nested foreach loop in PHP allows you to loop through multiple arrays within a single loop. This is useful when you want to iterate over a complex data structure, such as an array of arrays.

A nested foreach loop is a powerful tool for working with complex data structures, allowing you to iterate over multiple arrays and access their elements in a structured and organized manner.

*/ 

$students = array(
    array( "name" => "John", "age" => 20, "grade" => 80 ),
    array( "name" => "Jane", "age" => 18, "grade" => 90 ),
    array( "name" => "Jim", "age" => 22, "grade" => 85 ),
);

foreach ( $students as $student ) {
    foreach ( $student as $key => $value ) {
        echo $key . ": " . $value . PHP_EOL;
    }
    echo PHP_EOL;
}


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