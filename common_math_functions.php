<?php

/*
Math functions are a category of built-in functions in PHP that allow you to perform mathematical operations in your code. These functions can be used to perform various calculations such as finding the absolute value, rounding numbers, finding the minimum or maximum of a set of numbers, performing exponential and logarithmic operations, generating random numbers, and more.

*/ 
/*
Commonly used math functions in PHP:

abs() - Returns the absolute value of a number.
ceil() - Rounds a number up to the nearest integer.
floor() - Rounds a number down to the nearest integer.
round() - Rounds a number to the nearest integer or specified number of decimal places.
max() - Returns the highest value among a list of arguments.
min() - Returns the lowest value among a list of arguments.
sqrt() - Returns the square root of a number.
pow() - Returns the result of a number raised to a power.
exp() - Returns the value of e raised to a power.
log() - Returns the natural logarithm of a number.
log10() - Returns the base-10 logarithm of a number.
rand() - Returns a random number.
mt_rand() - Returns a random number using the Mersenne Twister algorithm.
pi() - Returns the value of π (pi).
deg2rad() - Converts an angle from degrees to radians.
rad2deg() - Converts an angle from radians to degrees.
sin() - Returns the sine of an angle.
cos() - Returns the cosine of an angle.
tan() - Returns the tangent of an angle.
asin() - Returns the inverse sine of a number.

*/ 


// abs() - Returns the absolute value of a number.

$num = -5;
$abs_num = abs($num);

echo $abs_num; // Outputs 5

// ceil() - Rounds a number up to the nearest integer.

$num = 5.6;
$ceil_num = ceil($num);

echo $ceil_num; // Outputs 6
// floor() - Rounds a number down to the nearest integer.

$num = 5.6;
$floor_num = floor($num);

echo $floor_num; // Outputs 5


// round() - Rounds a number to the nearest integer or specified number of decimal places.

$num = 5.6;
$round_num = round($num);

echo $round_num; // Outputs 6

$num = 5.6789;
$round_num = round($num, 2);

echo $round_num; // Outputs 5.68

// max() - Returns the highest value among a list of arguments.

$nums = array(1, 5, 10, 20);
$max_num = max($nums);

echo $max_num; // Outputs 20

// min() - Returns the lowest value among a list of arguments.

$nums = array(1, 5, 10, 20);
$min_num = min($nums);

echo $min_num; // Outputs 1

// sqrt() - Returns the square root of a number.

$num = 9;
$sqrt_num = sqrt($num);

echo $sqrt_num; // Outputs 3

// pow() - Returns the value of a number raised to a power.

$base = 2;
$exponent = 3;
$result = pow($base, $exponent);

echo $result; // Outputs 8


// exp() - Returns the value of e raised to a power.

$power = 2;
$result = exp($power);

echo $result; // Outputs 7.389056098930649...

// log() - Returns the natural logarithm (base e) of a number.

$num = 10;
$result = log($num);

echo $result; // Outputs 2.302585092994046...

// log10() - Returns the logarithm (base 10) of a number.

$num = 100;
$result = log10($num);

echo $result; // Outputs 2
// rand() - Returns a random number between 0 and the specified maximum value.

$max = 100;
$random = rand(0, $max);

echo $random; // Outputs a random number between 0 and 100
// mt_rand() - Returns a random number using the Mersenne Twister random number generator. This function generates a better random number than the rand() function.

$max = 100;
$random = mt_rand(0, $max);

echo $random; // Outputs a random number between 0 and 100


// pi() - Returns the value of the constant π (pi).

echo pi(); // Outputs 3.14159265358979...

// deg2rad() - Converts degrees to radians.

$degrees = 90;
$radians = deg2rad($degrees);

echo $radians; // Outputs 1.5707963267949...

// rad2deg() - Converts radians to degrees.

$radians = pi()/2;
$degrees = rad2deg($radians);

echo $degrees; // Outputs 90

// sin() - Returns the sine of a radian value.

$radians = pi()/2;
$sine = sin($radians);

echo $sine; // Outputs 1
// cos() - Returns the cosine of a radian value.

$radians = 0;
$cosine = cos($radians);

echo $cosine; // Outputs 1

// tan() - Returns the tangent of a radian value.

$radians = pi()/4;
$tangent = tan($radians);

echo $tangent; // Outputs 1

// asin() - Returns the arcsine (in radians) of a value.

$value = 1;
$arcsine = asin($value);

echo $arcsine; // Outputs 1.5707963267949...


