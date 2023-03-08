<?php

$x=1000000;

// $output= ($x>=100)?("Greater than 100"):("Less than 100");

// $output=($x>=100)?(($x>=500)?("Greater than 500"):("Less than 500 but grater than 100")):(($x<=50)?("Less than 50"):("Less than 100 but grater than 50"));

// $output =($x>1000)?("Grater than  1000"):("Less than or equal 1000");
// ()?(()?(()?():()):()):(()?():(()?():()));
$output =($x>=1000 )?(($x>=50000)?("Grater than 50000"):("Grater than 1000 but less than 50000")):(($x>=0)?("Grater than zero but less than 1000"):("Negative number"));


 echo $output;