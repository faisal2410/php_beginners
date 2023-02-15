<?php
/*
Project: Word Counter

In this project, you will create a PHP script that counts the number of words in a given text string. The script should also display the most frequently occurring word(s) in the text.

Here's an example of what the output might look like:


Text: The quick brown fox jumps over the lazy dog.
Number of words: 9
Most frequent word(s): the
To complete this project, you'll need to use several string functions in PHP, including explode, strtolower, str_word_count, array_count_values, and array_search. Here's a brief description of each function:

explode: This function splits a string into an array of substrings based on a specified delimiter.
strtolower: This function converts a string to lowercase.
str_word_count: This function counts the number of words in a string.
array_count_values: This function counts the number of occurrences of each value in an array.
array_search: This function searches an array for a given value and returns the corresponding key.
Here's a basic outline of the steps you can take to complete this project:

Create an HTML form that allows the user to enter a text string.
When the form is submitted, use the $_POST variable to retrieve the text string.
Use the explode function to split the text string into an array of words.
Use the strtolower function to convert all of the words to lowercase.
Use the array_count_values function to count the number of occurrences of each word.
Use the array_search function to find the most frequently occurring word(s).
Display the number of words in the text string and the most frequent word(s) on the web page.



*/ 