<?php

/*
I. Introduction:
=================

PHP provides a set of functions to manipulate and format dates and times.
These functions allow you to work with dates and times in a more convenient and organized way.

*/ 

/*
Commonly used date/time functions in PHP:
==========================================

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

/*
Unix epoch & unix timestamp
===========👌👌👌👌👌👌👌👌👌✔
A Unix timestamp is a representation of a date and time as the number of seconds elapsed since the Unix epoch, which is defined as January 1, 1970, 00:00:00 UTC. It is a widely used standard for representing dates and times in computer systems and programming languages, including PHP.

*/ 

$timestamp = time();
echo "Current Unix timestamp: " . $timestamp;
// Output:
// Current Unix timestamp: 1645029114
// You can also create a Unix timestamp from a specific date and time using the strtotime() function, like this:

$date_time = '2022-02-16 16:30:00';
$timestamp = strtotime($date_time);
echo "Unix timestamp for " . $date_time . ": " . $timestamp;
// Output:
// Unix timestamp for 2022-02-16 16:30:00: 1645023000
// In this example, the strtotime() function converts the string '2022-02-16 16:30:00' to a Unix timestamp of 1645023000.

// To convert a Unix timestamp back to a human-readable date and time, you can use the date() function, like this:

$timestamp = 1645023000;
$date_time = date('Y-m-d H:i:s', $timestamp);
echo "Date and time for Unix timestamp " . $timestamp . ": " . $date_time;

// Output:
// Date and time for Unix timestamp 1645023000: 2022-02-16 16:30:00
// In this example, the date() function formats the Unix timestamp 1645023000 as a human-readable date and time string in the 'YYYY-MM-DD HH:MM:SS'



// Date time Format in PHP👀👀
// =============================

/*
In PHP, you can format a date and time using the date() function, which takes two arguments: the format string and the timestamp (optional). The format string specifies how the date and time should be formatted and uses various placeholders for different components. Here are some commonly used placeholders:

Y: 4-digit year (e.g. 2022)
y: 2-digit year (e.g. 22)
m: 2-digit month (01-12)
M: 3-letter month abbreviation (e.g. Jan)
F: full month name (e.g. January)
d: 2-digit day of the month (01-31)
D: 3-letter day of the week (e.g. Mon)
l: full day of the week (e.g. Monday)
h: 12-hour format hour (01-12)
H: 24-hour format hour (00-23)
i: 2-digit minute (00-59)
s: 2-digit second (00-59)
a: lowercase am/pm
A: uppercase AM/PM
*/ 

// Get the current date and time
$date_time = date('Y-m-d H:i:s');

// Output the formatted date and time
echo "Formatted date and time: " . $date_time;
// Output:
// Formatted date and time: 2022-02-16 16:30:00
// In this example, the format string 'Y-m-d H:i:s' is used to format the date and time in the "YYYY-MM-DD HH:MM:SS" format. You can customize the format string to suit your needs and use it with the date() function to format a timestamp.

// Timestamp:
// 👀👀👀👀👀👀

// In PHP, you can get the current Unix timestamp using the built-in time() function, which returns the number of seconds since the Unix epoch (January 1, 1970 00:00:00 UTC). 

// Get the current timestamp
$timestamp = time();

echo "Current timestamp: " . $timestamp;
// Output:
// Current timestamp: 1645026059

// You can also create a Unix timestamp from a specific date and time using the strtotime() function, which converts a date and time string to a timestamp. 

$date_time = '2022-02-16 16:30:00';

// Convert date and time to timestamp
$timestamp = strtotime($date_time);

echo "Timestamp for " . $date_time . ": " . $timestamp;
// Output:
// Timestamp for 2022-02-16 16:30:00: 1645023000

// In this example, the strtotime() function converts the string '2022-02-16 16:30:00' to a Unix timestamp of 1645023000. Note that the input date and time string should be in a format that can be parsed by strtotime(), such as 'YYYY-MM-DD HH:MM:SS'.

// UTC

// In PHP, you can work with Coordinated Universal Time (UTC) using the gmdate() function and the date_default_timezone_set() function.

// The gmdate() function is similar to the date() function but returns the UTC time instead of the local time. It takes the same arguments as date() - a format string and an optional timestamp - but the timestamp is interpreted as a UTC timestamp.

// Set the default timezone to UTC
date_default_timezone_set('UTC');

// Get the current UTC date and time
$utc_time = gmdate('Y-m-d H:i:s');

echo "Current UTC time: " . $utc_time;
// Output:
// Current UTC time: 2022-02-16 17:15:00
// In this example, the date_default_timezone_set() function is used to set the default timezone to UTC. This ensures that all date and time functions that use the default timezone, such as gmdate(), return UTC time.

// Note that you can also use the DateTime class in PHP to work with UTC and other time zones. The DateTime class has a setTimezone() method that allows you to convert a date and time to a different time zone, such as UTC.



// =============================================👀xxxxxxxxxxxxxxx👀=================================


// date() - This function is used to format a local date and time according to a specified format.

echo date("F j, Y, g:i a"); 
// Output: February 13, 2023, 8:30 pm

// gmdate() - This function is used to format a GMT/UTC date and time according to a specified format.

echo gmdate("F j, Y, g:i a"); 
// Output: February 13, 2023, 4:30 pm

// strtotime() - This function is used to parse a human-readable date/time string and return a Unix timestamp.

echo strtotime("+1 week");
// Output: 1623171600 (timestamp for one week from now)

/*
echo strtotime( "now" ), "\n";
echo strtotime( "10 September 2000" ), "\n";
echo strtotime( "+1 day" ), "\n";
echo strtotime( "+1 week" ), "\n";
echo strtotime( "+1 week 2 days 4 hours 2 seconds" ), "\n";
echo strtotime( "next Thursday" ), "\n";
echo strtotime( "last Monday" ), "\n";

*/ 

// time() - This function is used to return the current Unix timestamp.

echo time();
// Output: 1623137400 (current timestamp)
// mktime() - This function is used to return the Unix timestamp for a specified date.

echo mktime(0, 0, 0, 2, 14, 2023);
// Output: 1623241200 (timestamp for February 14, 2023)

//👌👌👌👌 getdate() - This function is used to return an associative array with information about a specified date.

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


// date_sun_info(timestamp, latitude, longitude): This function returns an array containing information about sunrise, sunset, transit, and civil twilight for a specified date and location.

print_r(date_sun_info(time(), 40.7128, -74.0060));


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


// To convert a Unix timestamp to a human-readable date and time in PHP, you can use the built-in date() function. 
$timestamp = 1613507691;

// Convert timestamp to human-readable date and time
$date_time = date('Y-m-d H:i:s', $timestamp);

echo "Human-readable date and time: " . $date_time;
// Output:
// Human-readable date and time: 2021-02-16 06:48:11
// In this example, the date() function takes two arguments: the format of the date and time string you want to create, and the Unix timestamp you want to convert. The format string uses placeholders for different date and time components, such as Y for the year, m for the month, d for the day, H for the hour, i for the minute, and s for the second.


// To convert a human-readable date and time to a Unix timestamp in PHP, you can use the strtotime() function. 

$date_time = '2022-02-16 15:30:00';

// Convert date and time to Unix timestamp
$timestamp = strtotime($date_time);

echo "Unix timestamp: " . $timestamp;
// Output:
// Unix timestamp: 1645023000
// In this example, the strtotime() function takes a human-readable date and time string as an argument and returns a Unix timestamp. The function automatically recognizes various date and time formats and can handle time zones and daylight saving time. Note that the input date and time string should be in a format that can be parsed by strtotime(), such as 'YYYY-MM-DD HH:MM:SS'.




