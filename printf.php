<?php
$fName="Habibur";
$lName="Rahman";

// printf("His  name is %s %s",$fName,$lName);
// echo "\n";
// printf("His  name is %s %s",$fName,$lName);
// echo "\n";
// printf('His %3$s name is  %2$s %1$s',$fName,$lName,"Full");
// echo "\n";

printf("The Binary equivalent of %d is %b",200000,200000);
echo PHP_EOL;
printf("The Octal equivalent of %d is %o",200000,200000);
echo PHP_EOL;
printf("The Octal equivalent of %d is %x",200000,200000);
echo PHP_EOL;
printf("The Octal equivalent of %d is %X",200000,200000);
echo "\n";
echo "We love PHP";
echo "\n";

$n=3;
$result =(($n=10)?"Ten":($n=20))?"Twenty":"A Number";
echo $result;
