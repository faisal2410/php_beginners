<?php
/*
A recursive function is a function that calls itself in its definition. Recursive functions are used to solve problems that can be broken down into smaller, similar problems. The basic idea behind recursion is to take a problem and divide it into smaller sub-problems until you reach a base case, which can be solved directly. The solution to the original problem is then obtained by combining the solutions to the sub-problems.

In order to implement a recursive function, you need to define two things:

The base case: This is the simplest possible input to the function, and it should return a value without making any further recursive calls.

The recursive case: This is the case where the function makes a recursive call to itself with a smaller input, until it reaches the base case.

*/ 

// Calculates the nth power of a number using Recursive function

// function power( $base, $exponent ) {
//     if ( $exponent == 0 ) {
//         return 1;
//     } else {
//         return $base * power( $base, $exponent - 1 );
//     }

// }

// echo power( 2, 10 );

// Factorial using Recursive Function

// function factorial( $n ) {
//     if ( $n == 0 ) {
//         return 1;
//     } else {
//         return $n * factorial( $n - 1 );
//     }

// }

// echo factorial( 5 );


/*
Fibonacci using recursive function :

 */

// function fibonacci( $n ) {
//     if ( $n <= 1 ) {
//         return $n;
//     } else {
//         return fibonacci( $n - 1 ) + fibonacci( $n - 2 );
//     }

// }

// $n = 12;
// for ( $i = 0; $i < $n; $i++ ) {
//     echo fibonacci( $i ) . " ";
// }

// calculates the greatest common divisor (GCD) of two numbers:

/*
The greatest common divisor (GCD) of two numbers is the largest positive integer that divides both numbers without leaving a remainder. The GCD of two numbers can be found using the Euclidean algorithm.

*/ 

// function gcd( $a, $b ) {
//     if ( $b == 0 ) {
//         return $a;
//     } else {
//         return gcd( $b, $a % $b );
//     }

// }

// echo gcd( 252, 105 );