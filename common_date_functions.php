<?php

/*
I. Introduction:

PHP provides a set of functions to manipulate and format dates and times.
These functions allow you to work with dates and times in a more convenient and organized way.

*/ 
/*
Commonly used date/time functions in PHP:

date() - Formats a local date and time according to a specified format.

gmdate() - Formats a GMT/UTC date and time according to a specified format.

strtotime() - Parses a human-readable date/time string and returns a Unix timestamp.

time() - Returns the current Unix timestamp.

mktime() - Returns the Unix timestamp for a specified date.

getdate() - Returns an associative array with information about a specified date.

checkdate() - Validates a Gregorian calendar date.

date_default_timezone_set() - Sets the default timezone used by all date/time functions.

date_default_timezone_get() - Returns the default timezone used by all date/time functions.

date_sunrise() - Returns the sunrise time for a specified location and date.

date_sunset() - Returns the sunset time for a specified location and date.

date_sun_info() - Returns an array of information about the sun for a specified location and date.

strftime() - Formats a local time/date according to a specified format.

gmstrftime() - Formats a GMT/UTC time/date according to a specified format.

date_create() - Returns a new DateTime object.

date_create_from_format() - Returns a new DateTime object formatted according to a specified format.

date_format() - Formats a DateTime object according to a specified format.

date_modify() - Modifies a DateTime object by adding or subtracting an amount of time.

date_diff() - Returns the difference between two DateTime objects as a DateInterval object.

date_timezone_get() - Returns the timezone of a DateTime object.


*/ 


// date() - This function is used to format a local date and time according to a specified format.

echo date("F j, Y, g:i a"); 
// Output: February 13, 2023, 8:30 pm

// gmdate() - This function is used to format a GMT/UTC date and time according to a specified format.

echo gmdate("F j, Y, g:i a"); 
// Output: February 13, 2023, 4:30 pm

// strtotime() - This function is used to parse a human-readable date/time string and return a Unix timestamp.

echo strtotime("+1 week");
// Output: 1623171600 (timestamp for one week from now)

// time() - This function is used to return the current Unix timestamp.

echo time();
// Output: 1623137400 (current timestamp)
// mktime() - This function is used to return the Unix timestamp for a specified date.

echo mktime(0, 0, 0, 2, 14, 2023);
// Output: 1623241200 (timestamp for February 14, 2023)

// getdate() - This function is used to return an associative array with information about a specified date.

print_r(getdate());

// Output: 
/*
Array
(
    [seconds] => 0
    [minutes] => 31
    [hours] => 20
    [mday] => 13
    [wday] => 6
    [mon] => 2
    [year] => 2023
    [yday] => 44
    [weekday] => Saturday
    [month] => February
    [0] => 1623137060
)

*/ 

// checkdate() - This function is used to validate a Gregorian calendar date. It returns TRUE if the date is valid and FALSE if it is not.

echo checkdate(2, 29, 2023);
// Output: 1 (valid date)

echo checkdate(2, 30, 2023);
// Output:  (invalid date)


// date_default_timezone_set(timezone): This function is used to set the default timezone used by all date/time functions in your script. The timezone parameter is a string that represents a valid timezone (e.g. "America/New_York").

date_default_timezone_set("America/New_York");

// date_default_timezone_get(): This function returns the default timezone currently in use by PHP.

echo date_default_timezone_get();

// date_sunrise(timestamp, format, latitude, longitude, zenith, gmt_offset): This function returns the sunrise time for a specified date and location. The timestamp parameter is a UNIX timestamp, format specifies the format of the returned time, latitude and longitude are the coordinates of the location, zenith is the angle of the sun below the horizon for sunrise/sunset and gmt_offset is the number of seconds to add to or subtract from the returned time.

echo date_sunrise(time(), SUNFUNCS_RET_STRING, 40.7128, -74.0060, 90.83, -1);

// date_sunset(timestamp, format, latitude, longitude, zenith, gmt_offset): This function returns the sunset time for a specified date and location, and has the same parameters as date_sunrise().


echo date_sunset(time(), SUNFUNCS_RET_STRING, 40.7128, -74.0060, 90.83, -1);

// date_sun_info(timestamp, latitude, longitude): This function returns an array containing information about sunrise, sunset, transit, and civil twilight for a specified date and location.

print_r(date_sun_info(time(), 40.7128, -74.0060));

// strftime(format, timestamp): This function formats a local time and date as a string. The format parameter specifies the format of the returned string and timestamp is a UNIX timestamp.

echo strftime("%A, %B %d, %Y %I:%M %p", time());

// gmstrftime(format, timestamp): This function formats a Greenwich Mean Time (GMT) time and date as a string. It has the same parameters as strftime().

echo gmstrftime("%A, %B %d, %Y %I:%M %p", time());

// date_create(time, timezone): This function creates a new DateTime object. The time parameter is a string that represents a date and time, and timezone is a string that represents a valid timezone.

$date = date_create("2022-01-01 12:00:00");



// date_create_from_format() function in PHP is used to create a DateTime object from a custom formatted string. The syntax for date_create_from_format() function is:


// date_create_from_format(format, time, timezone);
// where format is the format of the input string, time is the input string and timezone is the timezone of the input string (optional).


$date = date_create_from_format("Y-m-d H:i:s", "2022-02-01 10:00:00");
echo date_format($date, "d-m-Y H:i:s");
// Output:
// 01-02-2022 10:00:00

// date_format() function in PHP is used to format a date and time in a specified format. The syntax for date_format() function is:

// date_format(DateTime object, format);
// where DateTime object is the input DateTime object and format is the format of the output string.


$date = new DateTime();
echo date_format($date, "Y-m-d H:i:s");
// Output:
// 2023-02-13 14:30:40


// date_modify() function in PHP is used to modify a DateTime object by adding or subtracting a specified interval. The syntax for date_modify() function is:

// date_modify(DateTime object, interval);

// where DateTime object is the input DateTime object and interval is the interval string to add or subtract.


$date = new DateTime();
date_modify($date, '+2 days');
echo date_format($date, "Y-m-d H:i:s");
// Output:
// 2023-02-15 14:30:40

// date_diff() function in PHP is used to calculate the difference between two dates. The syntax for date_diff() function is:


// date_diff(DateTime object1, DateTime object2, absolute);
// where DateTime object1 and DateTime object2 are the input DateTime objects and absolute is a boolean value indicating if the result should be absolute or not.

$date1 = new DateTime();
$date2 = date_create("2022-02-01 10:00:00");
$diff = date_diff($date1, $date2);
echo $diff->format("%R%a days");
// Output:

// +12 days

// date_timezone_get() function in PHP is used to get the timezone of a DateTime object. The syntax for date_timezone_get() function is:


// date_timezone_get(DateTime object);
// where DateTime object is the input DateTime object.


$date = new DateTime;



