<?php
/*PHP Loops */
/*
1. while - loops through a block of code as long as the specified condition is true

2.do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true

3.for - loops through a block of code a specified number of times

4.foreach - loops through a block of code for each element in an array

 */

// while
// $t_counter = 0;

// while ($t_counter <= 100){
//     print "The Ticket Counter: $t_counter \n";
//     $t_counter++;
// }

// $i=0;
// while($i<=10){
//     echo $i.PHP_EOL;
//     $i+=3;
// }

// do while
// do {
//     print "The Ticket Counter: $t_counter \n";
//     $t_counter++;
// } while ($t_counter <= 50);

// $i=6;
// do{
//     echo "**********".PHP_EOL;
//     echo $i*5;
//     eCho PHP_EOL;
//     echo "**********";
//     eCho PHP_EOL;
//     $i++;
// }while($i<=4);

//for
// for($t_counter = 0 ; $t_counter<=300; $t_counter++){
//     print "The Ticket Counter: $t_counter \n";
// }

// for ( $i = 0; $i <= 4; $i++ ) {
//     echo "**********" . PHP_EOL;
//     echo $i * 5;
//     eCho PHP_EOL;
//     echo "**********";
//     eCho PHP_EOL;
// }

// for($i=0;$i<=6;$i++){
//     if($i==3){
//         break;
//     }
//     echo $i.PHP_EOL;
// }
for($i=0;$i<=6;$i++){
    if($i==3){
        continue;
    }
    echo $i.PHP_EOL;
}

// foreach ---> array {key: value}
// $busket = ['apple', 'banana', 'cloths', 'toys', 'pen', 'book'];

// foreach($busket as $value){
//     print "$value <br>";
// }

// $persons = array(
//     'Sakil'  => 35,
//     'Ahmed'  => 45,
//     'Rubel'  => 15,
//     'Joynal' => 55,
//     'Lima'   => 25,
//     'Tania'  => 37,
//     'Joy'    => 5,
// );

// foreach ( $persons as $key => $value ) {
//     print "Name: $key Age: $value <br>";
// }

// for($i=0;$i<10; $i++){
//     echo $i.PHP_EOL;
// }

// for ($i=1;$i<=3;$i++){
//     for($j=0;$j<$i;$j++){
//         echo "&";
//     }
//     echo PHP_EOL;
// }

// for ($i=1;$i<=3;$i++){
//     for($j=0;$j<$i;$j++){
//         echo $j;
//     }
//     echo PHP_EOL;
// }

// $i=0;

// while($i<=10){
//     echo $i.PHP_EOL;
//     $i++;
// }

// $i=0;
// do{
//     echo $i.PHP_EOL;
//     $i++;

// }while($i<=10);

// for($i=10; $i>0; $i--){
//     echo $i.PHP_EOL;
// }

// for($i=10,$j=1;$i>0; $i--,$j++){
//     echo $i.":".$j.PHP_EOL;

// }

// $n=6;

// for($i=$n,$factorial=1;$i>1;$i--){
//     $factorial=$factorial*$i;
//     $factorial*=$i;

// }

// echo $factorial;