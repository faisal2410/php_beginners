<?php

/* functions  - a block of statements that can be used repeatedly in a program

function functinName(){
code to be executed
}

1. function with no return
2. function with arguments
3. function with default argument value
4. function with returning values
5. function with referenced argument

 */

// function with no return
// function printMessage(){
//     print "We are learning PHP language ";
// }
// echo "\n";

// printMessage(); // call the function


// function with arguments
// function fullName($firstName, $lastName){
//     print $firstName.' '.$lastName ."\n";
// }

// fullName("Mashrufa Binte", "Faisal");



// funtion with default argument value
// function printFullName($fullName="Faisal ahmed"){
//     echo "Hello Mr./Ms. $fullName";
// }

// echo "\n";

// printFullName("Mashrufa Binte Faisal");

// funtion with returning value
// function fullName($firstName, $lastName){
//     return $firstName.' '.$lastName ."\n";
// }

// $name= fullName("Mr.", "Anas");
// echo $name;



// return type declaration
// function addNumbers(int $x=0, int $y=0) :float
// {
//     return $x+$y;
// }



// print addNumbers(5);
// echo PHP_EOL;

// function with referenced argument
/*
In order to receive arguments by reference, variable used formal argument must be prefixed by & symbol. It makes reference to variables used for calling the function.

*/  

// function addFivetoCount(&$countValue){
//     $countValue +=5;
// }

// $countingNumber = 20;

// addFivetoCount($countingNumber);

// echo $countingNumber;

// function with default argument value;

// function calculator( int $var1, int $var2,$method = "sum")
// {
//     if ($method == 'sum') {
//         return $var1 + $var2;
//     } elseif ($method == 'sub') {
//         return $var1 - $var2;
//     } elseif ($method == 'mul') {
//         return $var1 * $var2;
//     } elseif ($method == 'div') {
//         return $var1 / $var2;
//     }

// }

// print calculator( 5, 6,'div');

// function calc(int $var1,int $var2, $method="sum"){
//     $output =($method=="sum")?($var1+$var2):(($method=="sub")?($var1-$var2):(($method=="div")?($var1/$var2):("Invalid input")));
//     return $output;
// }

// $calc_output=calc(10,2,'div');
// echo $calc_output;


function greetings($fname,$lname="Ahmed"){
    printf("Hello Mr. ".$fname." Welcome to function world ".$lname."\n");
}

// greetings();
// greetings();
// greetings();
// echo "We love php";
// echo PHP_EOL;
// greetings();
// greetings();
// greetings();
// greetings();
greetings("Habibur","Rahman");

// Accepting unlimited parameters in a function
