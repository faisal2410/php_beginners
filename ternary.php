<?php
// $number = 10;
// if ($number % 2 === 0) {
//     $result = 'Even';
// } else {
//     $result = 'Odd';
// }
// echo $result;
// ternary

// $x="70";
// $output=($x>=100)?(($x>=500)?("bd"):("outside bd")):(($x<50)?("native elien"):("cross platform elien"));
// echo $output;


// $number =200;
// $result=($number>50)?(($number>100)?("greater than 100"):("greater than 50 but less than 100")):(($number<10)?("bellow 10"):("invalid data"));
// echo $result;



// $number = 10;
// $result = $number % 2 === 0 ? 'Even' : 'Odd';
// echo $result;

// nested ternary
// $number = 0;
// echo $number > 0 ? 'Positive' : ($number < 0 ? 'Negative' : 'Zero');
// $value1=-5;
// $value2=10;

// $result = $value1 > 0 ? ($value2 > 0 ? "Both values are positive" : "First value is positive, second is not") : ($value2 > 0 ? "First value is not positive, second is" : "Both values are not positive");

// $output=$value1>0?($value2>0?("Both Positive"):("1st value positive but second value negative")):("Both values are not positive");

// echo $output;

// $x=10;

// ($x>20)?($z="Greater"):($z="Smaller");
// $z="The value is ".(($x>20)?"Greater":"Smaller");
// echo $z;


// $number=100;

// $output=($number>=100)?(($number>=500)?(($number>=1000)?("grater than  1000"):("grater than 500 but less than 1000")):("Less than 500 but grater than 100")):("less than 100");
// echo $output;

// $result=()?(()?(()?(()?():()):()):()):(()?():())
$a=50;
$x=$a/2;
$y=-10;
$output=($x>0 && $y>0)?("Passed"):("Fail");
echo $output;

// $number=-300;
// $result=($number>=500)?(($number>=2000)?(($number>=50000)?(($number>=100000)?("grater than 100000"):("grater than 50000 less than 100000")):("grater than 2000 but less than 50000")):("grater than 500 but less than 2000")):(($number>=0)?("Grater than 0 but less than 500"):("Negative number"));

// echo $result;

// $age=18;
// $voterId=($age>=18)?("Elligible"):("NE");
// echo $voterId;
$age=10;

$citizenStatus=($age>=18)?(($age>=50)?("SC"):("NC")):(($age>=10)?("Adollcent"):("Baby"));

