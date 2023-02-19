<?php
/*
Introduction
In PHP, there are various functions available to perform common tasks related to arrays, strings, date/time, and mathematical calculations. These functions can simplify coding and reduce the amount of work needed to achieve a particular outcome. In this lecture, we will review some of the most commonly used array functions, string functions, date/time functions, and math functions in PHP.

I. Array Functions
Arrays are an essential part of programming, and PHP provides a wide range of functions to work with arrays. Some of the most commonly used array functions are as follows:

array(): This function is used to create an array with one or more elements.

array_push(): This function is used to add one or more elements to the end of an array.

array_pop(): This function is used to remove the last element from an array.

array_shift(): This function is used to remove the first element from an array.

array_unshift(): This function is used to add one or more elements to the beginning of an array.

array_slice(): This function is used to extract a slice of an array.

array_merge(): This function is used to merge two or more arrays into a single array.

II. String Functions
Strings are used to store text data in programming, and PHP provides a variety of functions to manipulate strings. Some of the most commonly used string functions are as follows:

strlen(): This function is used to find the length of a string.

strpos(): This function is used to find the position of a substring within a string.

str_replace(): This function is used to replace one or more occurrences of a substring within a string.

strtolower(): This function is used to convert a string to lowercase.

strtoupper(): This function is used to convert a string to uppercase.

trim(): This function is used to remove whitespace characters from the beginning and end of a string.

str_split(): This function is used to split a string into an array of characters.

III. Date/Time Functions
Dates and times are frequently used in programming, and PHP provides several functions to work with them. Some of the most commonly used date/time functions are as follows:

date(): This function is used to format a date and/or time string.

time(): This function is used to get the current Unix timestamp.

strtotime(): This function is used to convert a string representation of a date and/or time into a Unix timestamp.

mktime(): This function is used to create a Unix timestamp for a specific date and/or time.

date_diff(): This function is used to calculate the difference between two dates.

date_add(): This function is used to add a specific amount of time to a date.

IV. Math Functions
Mathematical calculations are frequently used in programming, and PHP provides several functions to perform them. Some of the most commonly used math functions are as follows:

abs(): This function is used to find the absolute value of a number.

sqrt(): This function is used to find the square root of a number.

pow(): This function is used to raise a number to a specified power.

rand(): This function is used to generate a random number within a specified range.

max(): This function is used to find the maximum value in an array.

min(): This function is used to find the minimum value in an array.

Conclusion
In conclusion, PHP provides a vast range of functions to work with arrays, strings, date/time, and mathematical calculations. These functions can simplify coding and reduce the amount of work needed to achieve

*/ 

// Review of Essential Array Functions :
// 👀👀👀👀👀👀👀👌👀👀👀👀👀👌👀👌👌👀

// array(): This function is used to create an array with one or more elements.
// Use Case: Creating an array of numbers.

// Create an array of numbers
$numbers = array(1, 2, 3, 4, 5);

//1. array_push(): This function is used to add one or more elements to the end of an array.
// Use Case: Adding an element to the end of an array.

// $colors = array("red", "green", "blue");
// array_push($colors, "yellow");
// print_r($colors);


//2. array_pop(): This function is used to remove the last element from an array.
// Use Case: Removing the last element from an array.

// $fruits = array("apple", "banana", "cherry",array(1,"jack fruit"));
// $last_fruit = array_pop($fruits);
// // print_r($last_fruit) ;
// var_dump($last_fruit);
// echo PHP_EOL;
// print_r($fruits);


//3. array_shift(): This function is used to remove the first element from an array.
// Use Case: Removing the first element from an array.

// $names = array(1, "Mary", "Peter");
// $first_name = array_shift($names);
// echo $first_name;

//3. array_unshift(): This function is used to add one or more elements to the beginning of an array.
// Use Case: Adding an element to the beginning of an array.

// $cars = array("Toyota", "Honda", "Ford");
// array_unshift($cars, "Chevrolet","telagari");
// print_r($cars);


// 4.array_slice(): This function is used to extract a slice of an array.
// Use Case: Extracting a slice of an array.

// $letters = array("A", "B", "C", "D", "E");
// $slice = array_slice($letters, 0,1);
// print_r($slice);

//5. array_merge(): This function is used to merge two or more arrays into a single array.
// Use Case: Merging two arrays into a single array.

// $fruits1 = array("apple", "banana", "cherry");

// $fruits2 = array("orange", "kiwi", "mango");
// $all_fruits = array_merge($fruits2, $fruits1);
// print_r($all_fruits);


// Review of Essential String Functions
// 👀👀👀👀👀👀👌👌👌👌👀👀👀👌👀👀👀👀👀


// 1.strlen(): This function is used to get the length of a string.
// Use Case: Getting the length of a string.

// $string = "Hello, world!";
// $length = strlen($string);
// echo $length;


// 2.strpos(): This function is used to find the position of the first occurrence of a substring in a string.
// Use Case: Finding the position of a substring in a string.

// $string = "The quick brown fox jumps over the lazy dog";
// $position = strpos($string, "faisal");
// echo $position;

//3. str_replace(): This function is used to replace all occurrences of a substring in a string with another substring.
// Use Case: Replacing a substring in a string with another substring.


// $string = "The quick brown fox jumps over the lazy dog";
// $new_string = str_replace("fox", "cat", $string);
// echo $new_string;

// 4.strtolower(): This function is used to convert a string to lowercase.
// Use Case: Converting a string to lowercase.

// $string = "HELLO, WORLD!";
// $lowercase = strtolower($string);
// echo $lowercase;

// 5.strtoupper(): This function is used to convert a string to uppercase.
// Use Case: Converting a string to uppercase.

// $string = "hello, world!";
// $uppercase = strtoupper($string);
// echo $uppercase;

// 6.trim(): This function is used to remove whitespace or other characters from the beginning and end of a string.
// Use Case: Removing whitespace from the beginning and end of a string.

// $string = "   Hello, world!   ";
// $trimmed = trim($string);
// echo $trimmed;

//7. str_split(): This function is used to split a string into an array of characters.
// Use Case: Splitting a string into an array of characters.

// $string = "Hello, world!";
// $characters = str_split($string,2);
// print_r($characters);


// Essential Date/Time Functions
// 👀👀👀👌👌👀👀👀👀👌👌👌👌👌👌

//1. date(): This function is used to format a timestamp into a human-readable date string.
// Use Case: Formatting the current date.

// $date = date('Y-m-d');
// echo $date;


//2. time(): This function is used to get the current timestamp.
// Use Case: Getting the current timestamp.

// $timestamp = time();
// echo $timestamp;

// 3.strtotime(): This function is used to parse a date string into a timestamp.
// Use Case: Parsing a date string into a timestamp.

// $timestamp = strtotime('2023-02-18');
// echo $timestamp;

// 4.mktime(): This function is used to create a timestamp from a specified date and time.
// Use Case: Creating a timestamp from a specified date and time.

// $timestamp = mktime(0, 0, 0, 2, 18, 2023);
// echo $timestamp;

//5. date_diff(): This function is used to calculate the difference between two dates.
// Use Case: Calculating the difference between two dates.

$date1 = new DateTime('2000-02-18');
$date2 = new DateTime('2023-02-18');
$interval = date_diff($date1, $date2);
print_r($interval);


// Essential Math Functions
// 👌👀👀👀👀👀👌👀👀👀👌👌

//1. abs(): This function is used to get the absolute value of a number.
// Use Case: Getting the absolute value of a number.

$num = -10;
$abs = abs($num);
echo $abs;

// 2.sqrt(): This function is used to get the square root of a number.
// Use Case: Getting the square root of a number.

$num = 25;
$sqrt = sqrt($num);
echo $sqrt;

//3. pow(): This function is used to raise a number to a specified power.
// Use Case: Raising a number to a specified power.

$num = 2;
$power = pow($num, 3); // Raise to the power of 3
echo $power;

//4. rand(): This function is used to generate a random integer.
// Use Case: Generating a random integer.

echo $random = rand(1, 10);

//5. max(): This function is used to get the maximum value from a set of numbers.
// Use Case: Getting the maximum value from a set of numbers.

$num1 = 10;
$num2 = 20;
$num3 = 30;
$max = max($num1, $num2, $num3);

//6. min(): This function is used to get the minimum value from a set of numbers.
// Use Case: Getting the minimum value from a set of numbers.

$num1 = 10;
$num2 = 20;
$num3 = 30;
echo $min = min($num1, $num2, $num3);














