<?php

// Most commonly used array functions in PHP:
/*
array_keys()
array_values()
array_merge()
array_intersect()
array_diff()
array_sum()
array_product()
array_count_values()
array_filter()
array_map()
array_reduce()
array_slice()
array_splice()
array_unique()
sort()
rsort()
asort()
ksort()
usort()
array_reverse()


*/ 

// 1.array_key_exists: This function checks if a specified key exists in an array.

// $array = array("first_name" => "John", "last_name" => "Doe");

// if (array_key_exists("first_name", $array)) {
//     echo "The 'first_name' key exists in the array.";
// } else {
//     echo "The 'first_name' key does not exist in the array.";
// }

// =============================

// 2.array_push: This function adds one or more elements to the end of an array.

// $fruits = array("apple", "banana");

// array_push($fruits, "cherry", "orange");

// print_r($fruits);

// =======================

//3. array_pop: This function removes the last element from an array and returns the value of the removed element.

// $fruits = array("apple", "banana", "cherry");

// $last_fruit = array_pop($fruits);

// echo $last_fruit;
// echo PHP_EOL;
// print_r($fruits);


// 4.array_shift: This function removes the first element from an array and returns the value of the removed element.

// $fruits = array("apple", "banana", "cherry");

// $first_fruit = array_shift($fruits);

// echo $first_fruit;
//  echo PHP_EOL;
//  print_r($fruits);


// 5.array_unshift: This function adds one or more elements to the beginning of an array.

// $fruits = array("banana", "cherry");

// array_unshift($fruits, "apple");

// print_r($fruits);
// echo PHP_EOL;
// print_r($fruits);


//6. array_combine: This function creates an array by using the elements from one array as keys and the elements from another array as values.

// $keys = array("first_name", "last_name");
// $values = array("John", "Doe");

// $name = array_combine($keys, $values);

// print_r($name);

// ===================

//7. array_merge: This function merges two or more arrays into one array.

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "rectangle", 4);

// $result = array_merge($array1, $array2);

// print_r($result);

// =====================

//8. array_unique: This function removes duplicates from an array and returns an array with only unique values.

// $numbers = array(1, 2, 3, 4, 4, 4, 5, 5, 6);

// $unique_numbers = array_unique($numbers);

// print_r($unique_numbers);

// ===========================

//9. array_intersect: This function returns an array containing all the values of arrays that have matching values.

// $array1 = array( "a" => "green", "red", "blue" );
// $array2 = array( "b" => "green", "yellow", "red" );
// $result = array_intersect( $array1, $array2 );
// print_r( $result );

// ========================


//10. array_diff: This function returns an array containing all the values from the first array that are not present in any of the other arrays.

// $array1 = array("a" => "green", "red", "blue");
// $array2 = array("b" => "green", "yellow", "red");

// $result = array_diff($array1, $array2);

// print_r($result);

// =======================

//11. array_slice: This function returns a portion of an array.

// $fruits = array("apple", "banana", "cherry", "orange");

// $sliced_fruits = array_slice($fruits, 1, 2);

// print_r($sliced_fruits);

// ====================

//12. array_reverse: This function reverses the order of elements in an array.

// $fruits = array("apple", "banana", "cherry");

// $reversed_fruits = array_reverse($fruits);

// print_r($reversed_fruits);

// ========================
//13. sort: This function sorts an array in ascending order.

// $fruits = array("cherry", "banana", "apple");

// sort($fruits);

// print_r($fruits);

// =========================


//14. rsort: This function sorts an array in descending order.

// $fruits = array("cherry", "banana", "apple");

// rsort($fruits);

// print_r($fruits);
// ============================

//15. usort: This function sorts an array using a user-defined comparison function.

// $fruits = array("cherry", "banana", "apple");

// function custom_sort($a, $b) {
//     return strlen($a) - strlen($b);
// }

// usort($fruits, "custom_sort");

// print_r($fruits);


//16. array_search: This function searches an array for a specified value and returns the key if found.

// $fruits = array("apple", "banana", "cherry");

// $key = array_search("banana", $fruits);

// echo $key;


//17. in_array: This function checks if a specified value exists in an array.

// $fruits = array("apple", "banana", "cherry");

// if (in_array("banana", $fruits)) {
//     echo "The value exists in the array.";
// } else {
//     echo "The value does not exist in the array.";
// }

// =========================

//18. count: This function returns the number of elements in an array.

// $fruits = array("apple", "banana", "cherry");

// $number_of_fruits = count($fruits);

// echo $number_of_fruits;

// ========================


//19. implode: This function joins the elements of an array into a string.

// $array = ['lastname', 'email', 'phone'];
// var_dump( implode( ",", $array ) ); // string(20) "lastname,email,phone"

// // Empty string when using an empty array:
// var_dump( implode( 'hello', [] ) ); // string(0) ""

// // The separator is optional:
// var_dump( implode( ['a', 'b', 'c'] ) ); // string(3) "abc"

// ======================================================================================

/*
20. array_map is a built-in PHP function that allows you to apply a callback function to each element of an array, and return an array containing the results. The function takes two or more arguments:

The callback function, which specifies what should be done to each element of the array.
The array(s) to be processed.
In this example, the square function is defined to take a value as an argument and return its square. The array_map function is then used to apply this function to each element of the $numbers array. The result is stored in the $squared array.
*/ 



// function square( $value ) {
//     return $value * $value;
// }

// $numbers = array( 1, 2, 3, 4 );
// $squared = array_map( 'square', $numbers );

// print_r( $squared );


// =========================================

/*
21.array_filter is a built-in PHP function that allows you to filter the elements of an array based on a callback function. The function takes two arguments:

The array to be filtered.
A callback function that returns true or false depending on whether each element should be included in the filtered result.
Here's a code example that uses the array_filter function to remove all negative values from an array:

In this example, the isPositive function is defined to take a value as an argument and return true if the value is greater than or equal to zero, and false otherwise. The array_filter function is then used to apply this function to each element of the $numbers array. The result is stored in the $positive array, which contains only the positive numbers from the original array.

*/ 



// function isPositive( $value ) {
//     return $value >= 0;
// }

// $numbers = array( -1, 2, -3, 4 );
// $positive = array_filter( $numbers, 'isPositive' );

// print_r( $positive );



// array_keys(): This function returns an array of all the keys in an associative array. The resulting array will have integer or string indices, depending on the type of keys in the original array.


$fruits = array("apple"=>"red", "banana"=>"yellow", "grape"=>"purple");
$keys = array_keys($fruits);
print_r($keys);

// Output: Array ( [0] => apple [1] => banana [2] => grape )


// array_values(): This function returns an array of all the values in an associative array. The values will be stored in a numerically indexed array.

$fruits = array("apple"=>"red", "banana"=>"yellow", "grape"=>"purple");
$values = array_values($fruits);
print_r($values);
// Output: Array ( [0] => red [1] => yellow [2] => purple )



// array_sum(): This function calculates the sum of values in an array. It takes an array as input and returns the sum of all its elements.


$numbers = array(1, 2, 3, 4, 5);
$sum = array_sum($numbers);
echo $sum;

// Output: 15
// array_product(): This function calculates the product of values in an array. It takes an array as input and returns the product of all its elements.


$numbers = array(1, 2, 3, 4, 5);
$product = array_product($numbers);
echo $product;

// Output: 120
// array_count_values(): This function returns an associative array, where the keys are the values in the original array, and the values are the number of times that value appears in the original array.


$fruits = array("apple", "banana", "grape", "apple", "banana");
$count = array_count_values($fruits);
print_r($count);

// Output: Array ( [apple] => 2 [banana] => 2 [grape] => 1 )


// array_reduce(): This function iteratively reduces an array to a single value using a callback function. It takes two arguments: the first is the array to be reduced, and the second is a callback function that takes two arguments: the accumulator and the current value. The accumulator is initialized with the first value in the array, and the callback function is applied to each subsequent value in the array, with the accumulator being updated with each iteration.

// In this example, array_reduce iterates over the $numbers array, and the callback function adds the current value to the accumulator. The final result is the sum of all elements in the $numbers array.


$numbers = array(1, 2, 3, 4, 5);
$sum = array_reduce($numbers, function($accumulator, $current) {
  return $accumulator + $current;
});
echo $sum;

// Output: 15




// array_splice(): This function removes elements from an array and can also add new elements. It takes the following arguments: the input array, the starting offset, the number of elements to be removed, and optionally, the elements to be added.


$fruits = array("apple", "banana", "grape", "kiwi", "mango");
array_splice($fruits, 2, 2, array("orange", "lemon"));
print_r($fruits);

// Output: Array ( [0] => apple [1] => banana [2] => orange [3] => lemon [4] => mango )
// array_unique(): This function removes duplicate values from an array. The resulting array will contain only unique values, and the keys will be reindexed.


$fruits = array("apple", "banana", "grape", "apple", "banana");
$unique = array_unique($fruits);
print_r($unique);

// Output: Array ( [0] => apple [1] => banana [2] => grape )


// asort(): This function sorts an associative array in ascending order, based on the values. The keys are preserved, but the order of the elements is changed.


$fruits = array("apple"=>"red", "banana"=>"yellow", "grape"=>"purple");
asort($fruits);
print_r($fruits);

// Output: Array ( [apple] => red [banana] => yellow [grape] => purple )


// ksort(): This function sorts an associative array in ascending order, based on the keys. The values are preserved, but the order of the elements is changed.


$fruits = array("apple"=>"red", "banana"=>"yellow", "grape"=>"purple");
ksort($fruits);
print_r($fruits);

// Output: Array ( [apple] => red [banana] => yellow [grape] => purple )

// array_reverse(): This function reverses the order of elements in an array. The keys are preserved, but the order of the elements is changed.


$fruits = array("apple", "banana", "grape");
$reversed = array_reverse($fruits);
print_r($reversed);

// Output: Array ( [0] => grape [1] => banana [2] => apple )
