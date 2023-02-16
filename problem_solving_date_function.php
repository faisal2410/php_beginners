<?php
/*
Write a program to display the current date and time.
Implement a function to calculate the difference between two dates.
Write a program to convert a string date into a timestamp.
Implement a function to calculate the number of days in a month.
Write a program to add a specified number of days to a given date.
Implement a function to calculate the age of a person in years.
Write a program to format a date in a specified format.
Implement a function to calculate the number of weekdays between two dates.
Write a program to display the number of seconds between two dates.

Implement a function to calculate the week number of a given date.
Write a program to calculate the difference between two times.
Implement a function to check if a given year is a leap year.
Write a program to display the number of days left in the current month.
Implement a function to display the number of hours and minutes between two times.
Write a program to display the number of weeks left in the current year.
Implement a function to display the number of days left in the current year.
Write a program to convert a date into the ISO format.
Implement a function to convert a timestamp into a date.
Write a program to display the number of months between two dates.
Implement a function to calculate the date of the next or previous weekday.

*/ 



// Program to display the current date and time:


// echo "Current date and time: " . date("Y-m-d h:i:s");

// Function to calculate the difference between two dates:

// function dateDiff($date1, $date2) {
//     $diff = abs(strtotime($date2) - strtotime($date1));
//     $years = floor($diff / (365*60*60*24));
//     $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
//     $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
//     return "$years years, $months months, $days days";
// }

// $date1 = '2022-01-01';
// $date2 = '2023-02-16';
// echo "Difference between $date1 and $date2 is: " . dateDiff($date1, $date2);

// Program to convert a string date into a timestamp:

// $date = "2023-02-15";
// $timestamp = strtotime($date);
// echo "Timestamp for $date is: $timestamp";

// Function to calculate the number of days in a month:

// function daysInMonth($month, $year) {
//     // echo strtotime("$year-$month-01");
//     // echo PHP_EOL;
//     return date("t", strtotime("$year-$month-01"));
// }

// $month = 12;
// $year = 2023;
// echo "Number of days in month $month, year $year is: " . daysInMonth($month, $year);

// Program to add a specified number of days to a given date:

// $date = "2023-02-15";
// $daysToAdd = 7;
// $newDate = date('Y-m-d', strtotime($date . ' + ' . $daysToAdd . ' days'));
// echo "New date after adding $daysToAdd days to $date is: $newDate";

// Function to calculate the age of a person in years:

// function getAge($birthdate) {
//     $today = new DateTime();
//     $diff = $today->diff(new DateTime($birthdate));
//     return $diff->y;
// }

// $birthdate = "1975-01-01";
// echo "Age is " . getAge($birthdate) . " years";

// Program to format a date in a specified format:

// $date = "2023-02-15";
// $formattedDate = date("F j, Y", strtotime($date));
// echo "Formatted date is: $formattedDate";

// Function to calculate the number of weekdays between two dates:

// function getWeekdays($startDate, $endDate) {
//     $start = new DateTime($startDate);
//     $end = new DateTime($endDate);
//     $interval = DateInterval::createFromDateString('1 day');
//     $period = new DatePeriod($start, $interval, $end);
//     $weekdays = 0;
//     foreach ($period as $date) {
//         if ($date->format("N") <= 5) {
//             $weekdays++;
//         }
//     }
//     return $weekdays;
// }

// $startDate = "2023-02-01";
// $endDate = "2023-02-28";
// echo "Number of weekdays between $startDate and $endDate is: " . getWeekdays($startDate,$endDate);



// Function to calculate the week number of a given date:

// function getWeekNumber($date) {
//     $weekNumber = date('W', strtotime($date));
//     return $weekNumber;
// }

// Usage example
// echo getWeekNumber('2023-02-15'); // Output: 07



// Program to calculate the difference between two times:

// function getTimeDifference($time1, $time2) {
//     $diff = strtotime($time2) - strtotime($time1);
//     $hours = floor($diff / 3600);
//     $minutes = floor(($diff % 3600) / 60);
//     $seconds = $diff % 60;
//     $timeDiff = $hours . ' hours, ' . $minutes . ' minutes, and ' . $seconds . ' seconds';
//     return $timeDiff;
// }

// // Usage example
// echo getTimeDifference('10:00:00', '14:30:15'); // Output: 4 hours, 30 minutes, and 15 seconds



// Function to check if a given year is a leap year:

// function isLeapYear($year) {
//     if ($year % 4 == 0) {
//         if ($year % 100 == 0) {
//             if ($year % 400 == 0) {
//                 return true;
//             } else {
//                 return false;
//             }
//         } else {
//             return true;
//         }
//     } else {
//         return false;
//     }
// }

// // Usage example
// if (isLeapYear(2024)) {
//     echo '2024 is a leap year';
// } else {
//     echo '2024 is not a leap year';
// }



// Program to display the number of days left in the current month:

// function getDaysLeftInMonth() {
//     $daysInMonth = date('t');
//     echo $daysInMonth;
//     echo PHP_EOL;
//     $today = date('j');
//     echo $today;
//     echo PHP_EOL;
//     $daysLeft = $daysInMonth - $today;
//     return $daysLeft;
// }

// // Usage example
// echo getDaysLeftInMonth(); // Output: Number of days left in the current month


// Function to display the number of hours and minutes between two times:

// function getHoursAndMinutesBetweenTimes($time1, $time2) {
//     $diff = strtotime($time2) - strtotime($time1);
//     $hours = floor($diff / 3600);
//     $minutes = floor(($diff % 3600) / 60);
//     $timeDiff = $hours . ' hours and ' . $minutes . ' minutes';
//     return $timeDiff;
// }

// // Usage example
// echo getHoursAndMinutesBetweenTimes('10:00:00', '14:30:15'); // Output: 4 hours and 30 minutes


// Program to display the number of weeks left in the current year:

// function getWeeksLeftInYear() {
//     $daysLeft = date('z', strtotime('December 31')) - date('z');
//     $weeksLeft = ceil(($daysLeft + 1) / 7);
//     return $weeksLeft;
// }

// Usage example
// echo getWeeksLeftInYear(); // Output: Number of weeks left in the current year



// Function to display the number of days left in the current year:

// function getDaysLeftInYear() {
//     $daysInYear = date('L') ? 366 : 365;
//     $daysLeft = $daysInYear - date('z');
//     return $daysLeft;
// }

// Usage example
// echo getDaysLeftInYear(); // Output:




// Convert a date into the ISO format:

// $date = "2023-02-15";
// $isoDate = date("c", strtotime($date));
// echo $isoDate;
//Output: 2023-02-15T00:00:00+00:00



// Convert a timestamp into a date:

// $timestamp = 1644921600; // February 16, 2022, 12:00:00 AM
// $date = date("Y-m-d H:i:s", $timestamp);
// echo $date;
// Output: 2022-02-16 00:00:00



// Display the number of months between two dates:

// $date1 = "2022-01-01";
// $date2 = "2023-02-15";

// $months = (int)date("m", strtotime($date2)) - (int)date("m", strtotime($date1));
// $years = (int)date("Y", strtotime($date2)) - (int)date("Y", strtotime($date1));

// $months += $years * 12;

// echo $months;
// Output: 13

// Calculate the date of the next or previous weekday:

// function getNextWeekday($weekday) {
//     $date = new DateTime();
//     $date->modify("next $weekday");
//     return $date->format("Y-m-d");
// }

// function getPrevWeekday($weekday) {
//     $date = new DateTime();
//     $date->modify("last $weekday");
//     return $date->format("Y-m-d");
// }

// Examples:
// echo getNextWeekday("Monday"); // Outputs the date of the next Monday
// echo getPrevWeekday("Friday"); // Outputs the date of the previous Friday


