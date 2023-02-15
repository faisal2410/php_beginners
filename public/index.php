<?php
// printf
// Variable swapping
// Numbering system
// rounding

/*
$n=12;
$o=012;
$h=0x;
$hex=0X;




*/ 


$fName="Habibur";
$lName="Rahman";
$n=45.678;
$x=123; //00123
$y=3456;//03456

$a=8796.25678;
$b=23587.45879991;

printf("My name is %s %s",$fName,$lName);
echo "\n";
printf('My %3$s name is %2$s %1$s',$fName,$lName,"Full");
echo "\n";
printf("The binary equivalent of %d is %b",12,12);
echo "\n";
printf('The binary equivalent of %1$d is %1$b',12);
echo "\n";

printf("%.2f",$n);
echo "\n";
printf("%05d \n%05d",$x,$y);
echo "\n";

printf("%08.2f %08.2f",$a,$b);
echo "\n";

$num1 = 123456789;
$num2 = -123456789;
$char = 50; // The ASCII Character 50 is 2

// Note: The format value "%%" returns a percent sign
printf("%%b = %b \n",$num1); // Binary number
printf("%%c = %c \n",$char); // The ASCII Character
printf("%%d = %d \n",$num1); // Signed decimal number
printf("%%d = %d \n",$num2); // Signed decimal number
printf("%%e = %e \n",$num1); // Scientific notation (lowercase)
printf("%%E = %E \n",$num1); // Scientific notation (uppercase)
printf("%%u = %u \n",$num1); // Unsigned decimal number (positive)
printf("%%u = %u \n",$num2); // Unsigned decimal number (negative)
printf("%%f = %f \n",$num1); // Floating-point number (local settings aware)
printf("%%F = %F \n",$num1); // Floating-point number (not local settings aware)
printf("%%g = %g \n",$num1); // Shorter of %e and %f
printf("%%G = %G \n",$num1); // Shorter of %E and %f
printf("%%o = %o \n",$num1); // Octal number
printf("%%s = %s \n",$num1); // String
printf("%%x = %x \n",$num1); // Hexadecimal number (lowercase)
printf("%%X = %X \n",$num1); // Hexadecimal number (uppercase)
printf("%%+d = %+d \n",$num1); // Sign specifier (positive)
printf("%%+d = %+d \n",$num2); // Sign specifier (negative)