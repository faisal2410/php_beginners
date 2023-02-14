<?php
// Write a function that takes a string as input and returns the number of vowels in the string. Use the strlen(), strtolower(), and substr() functions to process the string.

// function count_vowels( $string ) {
//     $vowels = ['a', 'e', 'i', 'o', 'u'];
//     $count = 0;
//     $string = strtolower( $string );
//     for ( $i = 0; $i < strlen( $string ); $i++ ) {
//         if ( in_array( substr( $string, $i, 1 ), $vowels ) ) {
//             $count++;
//         }
//     }
//     return $count;
// }
// echo count_vowels("bangladesh is my mother land");


// Write a function that takes a string as input and returns the string with all vowels replaced by the character "x". Use the str_replace() and strtolower() functions to process the string.

// function replace_vowels( $string ) {
//     $vowels = ['a', 'e', 'i', 'o', 'u'];
//     $string = strtolower( $string );
//     foreach ( $vowels as $vowel ) {
//         $string = str_replace( $vowel, 'x', $string );
//     }
//     return $string;
// }

// echo replace_vowels("bangladesh is my motherland");


// Write a function that takes a string as input and returns the string with all words in reverse order. Use the explode(), array_reverse(), and implode() functions to process the string.

// function reverse_words( $string ) {
//     $words = explode( ' ', $string );
//     $words = array_reverse( $words );
//     return implode( ' ', $words );
// }

// echo reverse_words("bangladesh is my motherland");




// Write a function that takes a string as input and returns the number of times the word "PHP" appears in the string.

// function count_php($string) {
//     return substr_count(strtolower($string), 'php');
// }

// echo count_php("We love PHP. We are learning PHP");


// Write a function that takes a string as input and returns a new string that consists of the first and last two letters of the input string.

// function first_last_two($string) {
//     $length = strlen($string);
//     if ($length <= 4) {
//         return $string;
//     } else {
//         return substr($string, 0, 2) . substr($string, -2);
//     }
// }

// echo first_last_two("bangladesh is my motherland");

// Write a function that takes a string as input and returns the string with all occurrences of the substring "not" removed.

// function remove_not($string) {
//     return str_replace('not', '', $string);
// }
// echo remove_not("we are not cricket players. we are not actors.");


// Write a function that takes two strings as input and returns a new string that consists of the first half of the first string concatenated with the second half of the second string.

// function concat_half($string1, $string2) {
//     $len1 = strlen($string1);
//     $len2 = strlen($string2);
//     $mid1 = ceil($len1 / 2);
//     $mid2 = floor($len2 / 2);
//     return substr($string1, 0, $mid1) . substr($string2, $mid2);
// }

// echo concat_half("bangladesh","sylhet");


// Write a function that takes a string as input and returns a new string with all vowels removed.

// function remove_vowels($string) {
//     return preg_replace('/[aeiou]/i', '', $string);
// }

// echo remove_vowels("bangladesh is my motherland");


// Write a function that takes a string as input and returns the reverse of the string.

// function reverse_string($string) {
//     return strrev($string);
// }

// echo reverse_string("Bangladesh is my motherland");

// Write a function that takes a string as input and returns the string with all spaces removed.

// function remove_spaces($string) {
//     return str_replace(' ', '', $string);
// }

// echo remove_spaces("bangladesh is my motherland");

// Write a function that takes a string as input and returns the string with the first letter of each word capitalized.

// function capitalize_words($string) {
//     return ucwords($string);
// }

// echo capitalize_words("bangladesh is my motherland");

// Write a function that takes two strings as input and returns a new string that is the result of alternating the characters of the two input strings.

// function alternate_strings($string1, $string2) {
//     $len1 = strlen($string1);
//     $len2 = strlen($string2);
//     $maxlen = max($len1, $len2);
//     $result = '';
//     for ($i = 0; $i < $maxlen; $i++) {
//         if ($i < $len1) {
//             $result .= $string1[$i];
//         }
//         if ($i < $len2) {
//             $result .= $string2[$i];
//         }
//     }
//     return $result;
// }

// echo alternate_strings("bangladesh","sylhet");

// Write a function that takes a string as input and returns the string with all characters replaced by the ASCII value of the character.


// function ascii_string($string) {
//     $result = '';
//     for ($i = 0; $i < strlen($string); $i++) {
//         $result .= ord($string[$i]) . ' ';
//     }
//     return trim($result);
// }

// echo ascii_string("bangladesh");





