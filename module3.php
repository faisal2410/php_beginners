<?php
function gcd( $a, $b ) {
    // if either a or b is zero, return the other number
    if ( $a == 0 ) {
        return $b;
    }
    if ( $b == 0 ) {
        return $a;
    }

    // loop while both a and b are not zero
    while ( $a != 0 && $b != 0 ) {
        // find the remainder of a divided by b
        $r = $a % $b;

        // set a to b and b to the remainder
        $a = $b;
        $b = $r;
    }

    // return the GCD
    return $a;
}

// test the function with the given data
$gcd = gcd( 12, 18 );
echo $gcd; // output: 6
