<?php

//1.Problem: Sort an array of student names by their average test scores, in descending order:

// $students = array(
//   "Alice" => array(75, 85, 90),
//   "Bob" => array(80, 90, 95),
//   "Charlie" => array(85, 75, 80)
// );

// //  Calculate the average test scores for each student

// foreach ($students as $name => $scores) {
//   $avg_score = array_sum($scores) / count($scores);
//   $students[$name]['avg_score'] = $avg_score;
// }
// // print_r($students);

// //  Sort the students by their average scores, in descending order

// uasort($students, function($a, $b) {
//     return $b['avg_score'] - $a['avg_score'];
// });
// // print_r($students);

// //  Output the sorted list of students

// foreach ($students as $name => $data) {
//   echo $name.": ".$data['avg_score']."\n";
// }


// ===================================================
// ===================================================


// 2.Problem:Remove all words that start with a vowel from a sentence:

// $sentence = "The quick brown fox jumps over the lazy dog";

//  // Convert the sentence to an array of words

// $words = explode(" ", $sentence);
// // print_r($words);

//  // Filter out the words that start with a vowel

// $filtered_words = array_filter($words, function($word) {
//   return !preg_match('/^[aeiou]/i', $word);
// });

// print_r($filtered_words);



 // Convert the filtered words back to a sentence

// $new_sentence = implode(" ", $filtered_words);

// echo $new_sentence; // Output: quick brown jumps over lazy


// ==================================================
// ==================================================

// 3. Problem :Find the most common word in a sentence:

// $sentence = "The quick brown fox jumps over the lazy dog";

//  // Convert the sentence to an array of words

// $words = explode(" ", $sentence);

// // Count the occurrence of each word
// $word_counts = array_count_values($words);
// // print_r($word_counts);

// // Sort the words by their count, in descending order

// arsort($word_counts);

// // Get the most common word

// $most_common_word = array_keys($word_counts)[0];

// echo $most_common_word; // Output: the


// ==============================================
// ==============================================


// 4.Problem :Remove all duplicate values from multiple arrays, and merge the unique values into a new array:

// $fruits1 = array("apple", "banana", "orange");
// $fruits2 = array("orange", "grape", "kiwi");
// $fruits3 = array("apple", "pear", "kiwi");

// Merge the arrays and remove duplicates
// print_r(array_merge($fruits1, $fruits2, $fruits3));
// $unique_fruits = array_unique(array_merge($fruits1, $fruits2, $fruits3));

// print_r($unique_fruits);
// Output: Array ( [0] => apple [1] => banana [2] => orange [3] => grape [4] => kiwi [5] => pear )

// ==============================================
// ==============================================


//5.Problem : Group an array of numbers into "odd" and "even" groups:

// $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

// // Partition the array into odd and even numbers
// $groups = array_reduce($numbers, function($acc, $num) {
//   if ($num % 2 == 0) {
//     $acc['even'][] = $num;
//   } else {
//     $acc['odd'][] = $num;
//   }
//   return $acc;
// }, array('odd' => array(), 'even' => array()));

// print_r($groups);
// Output: Array ( [odd] => Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 7 [4] => 9 ) [even] => Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 ) )

// ===================================================
// ===================================================


// 6.Problem: Find the most frequent item in an array of strings:

// $colors = array("red", "blue", "green", "blue", "yellow", "red", "blue", "green", "green");

// Count the occurrence of each color

// $color_counts = array_count_values($colors);

// Sort the colors by their count, in descending order
// arsort($color_counts);

 // Get the most frequent color

// $most_frequent_color = array_keys($color_counts)[0];

// echo $most_frequent_color; // Output: blue


// =========================================================
// =========================================================


// 7.Problem: Merge two arrays of objects, and remove any duplicate objects based on a common property:

// class Person {
//   public $name;
//   public $age;

//   public function __construct($name, $age) {
//     $this->name = $name;
//     $this->age = $age;
//   }
// }

// $people1 = array(
//   new Person("Alice", 25),
//   new Person("Bob", 30),
//   new Person("Charlie", 35)
// );

// $people2 = array(
//   new Person("Charlie", 35),
//   new Person("David", 40),
//   new Person("Eve", 45)
// );

 // Merge the arrays and remove duplicates based on name

// $merged_people = array_values(array_unique(array_merge($people1, $people2), SORT_REGULAR));

// print_r($merged_people);

 // Output: Array ( [0] => Person Object ( [name] => Alice [age] => 25 ) [1] => Person Object ( [name] => Bob [age] => 30 ) [2] => Person Object ( [name] => Charlie [age] => 35 ) [3] => Person Object ( [name] => David [age] => 40 ) [4] => Person Object ( [name] => Eve [age] => 45 ) )

// =======================================================
// =======================================================


// 8.Problem: Find the intersection of multiple arrays of strings, i.e. the values that appear in all arrays:

// $fruits1 = array("apple", "banana", "orange");
// $fruits2 = array("orange","apple", "grape", "kiwi");
// $fruits3 = array("apple", "pear", "kiwi");

 // Find the intersection of the arrays
//  print_r(array_intersect( $fruits1, $fruits2, $fruits3 ));


// $common_fruits = call_user_func_array('array_intersect', array($fruits1, $fruits2, $fruits3));

// print_r($common_fruits);

 // Output: Array ( [0] => apple [1] => kiwi )


// 9.Problem :Flatten a multi-dimensional array into a single array of values:

$matrix = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

 // Flatten the matrix into a single array
$flat_array = array_merge(...$matrix);

print_r($flat_array);
 // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] =>

// ============================================================================
// ============================================================================