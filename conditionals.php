<?php
/*Conditional Statements*/
/**
 * if
 * if-else
 * ternary
 * nested ternary
 * switch
 * */ 

// if....else
// $age = 15;

// if($age >= 18)   ///  ==, >, <, != >=, <=, +,-,*,/,++--
// echo "Happy Birthday!!";
// else
// echo "Your are below 18";




// $color ="blue";
// if($color == 'blue')
// print "Color is : blue";
// else
// print "Color is: not blue";


// if...elseif...else
// $color ="green";
// if($color == 'blue')
// print "Color is : blue";
// elseif($color == 'red')
// print "Color is: red";
// elseif($color == 'yellow')
// print "Color is: Yellow";
// elseif($color=="green"){
//     echo "Color is green";
// }
// else
// print "Color is undefined!";



// switch
$color = "yellow";

switch ($color){
    case "blue":
        echo "This color is blue";
        break;
    case "yellow":
        echo "This color is yellow";
        break;
    case "green":
        echo "This color is green";
        break;
    default:
        print "Not specific color found!";     
}



