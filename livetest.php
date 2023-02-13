<?php

/*
Write a function that takes an array of integers and a target sum as input, and returns a boolean
indicating whether there exists a pair of integers in the array that add up to the target sum. You
can assume the array has at least two elements and all elements are unique. Use a loop in your
solution.
input: [5, 7, 1, 2, 8, 4, 3], 8
output: true (because 5 + 3 = 8)

 */

function existsPairWithSum( $array, $sum ) {
    $set = [];
    foreach ( $array as $value ) {
        if ( in_array( $sum - $value, $set ) ) {
            return true;
        }
        $set[] = $value;
    }
    return false;
}

$array = [5, 7, 1, 2, 8, 4, 3];
$sum = 8;
if ( existsPairWithSum( $array, $sum ) ) {
    echo "There exists a pair with sum $sum.";
} else {
    echo "There does not exist a pair with sum $sum.";
}
