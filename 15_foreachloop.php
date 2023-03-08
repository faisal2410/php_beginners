<?php
/*
The foreach loop is used to traverse the array elements. It works only on array and object. It will issue an error if you try to use it with the variables of different datatype.

The foreach loop works on elements basis rather than index. It provides an easiest way to iterate the elements of an array.

In foreach loop, we don't need to increment the value.


Study reference: https: //www.javatpoint.com/php-foreach-loop
===============
*/ 

$ages = array( 4, 8, 15, 16, 23, 42 );

foreach ( $ages as $age ) {
    echo "Age: {$age}";
    echo PHP_EOL;
}


echo PHP_EOL;
 // foreach using assoc. array

$person = array(
    "first_name" => "Faisal",
    "last_name"  => "Ahmed",
    "address"    => "123 Main Street",
    "city"       => "Beverly Hills",
    "state"      => "CA",
    "zip_code"   => "90210",
);

foreach ( $person as $attribute => $data ) {
    $attr_nice = ucwords( str_replace( "_", " ", $attribute ) );
    echo "{$attr_nice}: {$data}";
    echo PHP_EOL;
}


// echo PHP_EOL;
// $prices = array( "Brand New Computer" => 2000,
//     "1 month of Lynda.com"               => 25,
//     "Learning PHP"                       => null );

// foreach ( $prices as $item => $price ) {
//     echo "{$item}: ";
//     if ( is_int( $price ) ) {
//         echo "$" . $price;
//     } else {
//         echo "priceless";
//     }
//    echo PHP_EOL;
// }


