<?php

// Input Validation 

/*
empty() Function :
===============
The empty() function in PHP is used to determine if a variable is empty or not. A variable is considered empty if it doesn't exist, or if its value is one of the following:

null
0 (integer)
0.0 (float)
"" (empty string)
"0" (string with a single zero character)
array() (empty array)
false
=====================

The empty() function can be useful for checking if a required field has been filled in by the user, or for checking if a variable has a value before using it in a script.
 */

// $name = 0;

// if ( empty( $name ) ) {
//     echo "The name field is empty";
// } else {
//     echo "The name field is not empty";
// }

/*
Output
=======
The name field is empty

 */

/*
filter_var()
============
The filter_var() function in PHP is used to filter a variable with a specified filter. This function is useful for validating user input, as it provides a convenient way to check that a variable meets certain criteria, such as being a valid email address, URL, or IP address.

This code demonstrates how to use the filter_var() function to validate an email address. The filter_var() function takes two arguments: the variable to be filtered and the filter to be applied. In this case, the FILTER_VALIDATE_EMAIL filter is used to check if the email address is valid. If the email address is valid, the filter_var() function returns true, and the code inside the if statement will be executed

In addition to the FILTER_VALIDATE_EMAIL filter, the filter_var() function supports several other filters, including FILTER_VALIDATE_URL for validating URLs, FILTER_VALIDATE_IP for validating IP addresses, and FILTER_VALIDATE_INT for validating integers.
 */
 

$email = "example@example.com";

if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    echo "The email address is valid";
} else {
    echo "The email address is not valid";
}

/*
Output
======
The email address is valid


*/ 

/*
The preg_match() function in PHP is used to perform a pattern match on a string. It is commonly used for validating user input, as it provides a way to check if a string meets certain criteria, such as being a valid phone number or credit card number.

This code demonstrates how to use the preg_match() function to validate a phone number. The preg_match() function takes two arguments: the regular expression pattern to match and the string to be matched. In this case, the pattern /^\d{3}-\d{3}-\d{4}$/ matches a string that starts with three digits, followed by a hyphen, then three more digits, another hyphen, and finally four more digits. If the phone number matches this pattern, the preg_match() function returns 1, and the code inside the if statement will be executed.


*/ 



// $phone = "555-555-5555";

// if ( preg_match( "/^\d{3}-\d{3}-\d{4}$/", $phone ) ) {
//     echo "The phone number is valid";
// } else {
//     echo "The phone number is not valid";
// }

/*
Output:
The phone number is valid
*/ 






// Function to validate a required field
function validate_required( $field_value ) {
    if ( empty( $field_value ) ) {
        return "This field is required";
    } else {
        return "";
    }
}

// Function to validate an email address
function validate_email( $email ) {
    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        return "Invalid email address";
    } else {
        return "";
    }
}

// Function to validate a phone number
function validate_phone_number( $phone ) {
    if ( !preg_match( "/^\d{10}$/", $phone ) ) {
        return "Invalid phone number";
    } else {
        return "";
    }
}

// Example usage
$name = "";
$email = "invalid_email";
$phone = "1234567890";

$name_error = validate_required( $name );
$email_error = validate_email( $email );
$phone_error = validate_phone_number( $phone );

if ( $name_error || $email_error || $phone_error ) {
    echo "Errors:";
    echo "\n";
    if ( $name_error ) {
        echo "Name: $name_error";
        echo "\n";
    }
    if ( $email_error ) {
        echo "Email: $email_error";
        echo "\n";
    }
    if ( $phone_error ) {
        echo "Phone: $phone_error";
        echo "\n";
    }
} else {
    echo "No errors found";
    echo "\n";
}

/*
Output
=======

Errors:
Name: This field is required
Email: Invalid email address

 */
