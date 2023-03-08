<?php
// "isset" and "empty" are both built-in PHP functions that are used to check if a variable exists and whether it has a non-empty value.

// "isset" is used to check whether a variable has been set and is not null. It returns a boolean value of "true" if the variable exists and has a non-null value, and "false" if the variable does not exist or has a null value. Here's an example:

$name = "John";
if (isset($name)) {
    echo "The variable 'name' is set and has a value of: " . $name;
} else {
    echo "The variable 'name' is not set.";
}
// In this example, we're checking whether the variable "$name" exists and has a non-null value using the "isset" function. Since "$name" is set to "John", the output will be: "The variable 'name' is set and has a value of: John".

// "empty" is used to check whether a variable is empty. It returns a boolean value of "true" if the variable is empty, and "false" if the variable has a non-empty value. Here's an example:

$name = "";
if (empty($name)) {
    echo "The variable 'name' is empty.";
} else {
    echo "The variable 'name' is not empty and has a value of: " . $name;
}
// In this example, we're checking whether the variable "$name" is empty using the "empty" function. Since "$name" is an empty string, the output will be: "The variable 'name' is empty".

// Note that the "empty" function considers a variable to be empty if it is:

// An empty string
// Zero (0)
// Null
// An empty array
// An unset variable




