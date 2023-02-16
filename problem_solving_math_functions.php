<?php
/*
Implement a function to calculate the factorial of a given number.
Write a program to find the greatest common divisor (GCD) of two numbers.
Implement a function to calculate the least common multiple (LCM) of two numbers.
Write a function to calculate the square root of a number.
Implement a function to calculate the exponential value of a number.
Implement a function to calculate the absolute value of a number.
Write a program to calculate the area of a circle.

*/ 

// Function to calculate the factorial of a given number:

function factorial($n) {
    if($n < 2) {
        return 1;
    }
    return $n * factorial($n - 1);
}

// echo factorial(5);
// Program to find the greatest common divisor (GCD) of two numbers:

function gcd($a, $b) {
    while($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

// echo gcd(12,18);


// Function to calculate the least common multiple (LCM) of two numbers:

function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

// echo lcm(2,3);

// Function to calculate the square root of a number:

function squareRoot($n) {
    if($n < 0) {
        return "Undefined";
    }
    return sqrt($n);
}

// echo squareRoot(25);

// Function to calculate the exponential value of a number:

function exponential($n, $exp) {
    return pow($n, $exp);
}

// echo exponential(2,3);



// Function to calculate the absolute value of a number:

function absolute($n) {
    return abs($n);
}

// echo absolute(-5);

// Program to calculate the area of a circle:

function circleArea($r) {
    return pi() * $r * $r;
}
// echo circleArea(10);







