<?php
/*
HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.
*/ 

// $tuition = 12000;

// $commission=($tuition>=20000)?(0.25*$tuition):(($tuition>=10000)?(0.20*$tuition):(($tuition>=7000)?(0.15*$tuition):("Invalid data")));

// echo "The commission is $commission";

// $test=($x%2==0)?("even"):("odd");
$x=-5;

$test=($x>=10)?(($x>=100)?("grater than 100"):("less than 100 but grater than 10")):(($x>=0)?("grater than zero but less than 10"):("Negative number"));
echo $test;
