<?php
 // while loop example
// $count = 0;
// while ( $count <= 10 ) {
//     echo $count . ", ";
//     $count++;
// }

// echo PHP_EOL;


// for ( $count = 0; $count <= 10; $count++ ) {
//     echo $count . ", ";
// }



//   echo PHP_EOL; 
  

// for ( $count = 20; $count > 0; $count-- ) {
//     if ( $count % 2 == 0 ) {
//         echo "{$count} is even".PHP_EOL;
//     } else {
//         echo "{$count} is odd".PHP_EOL;
//     }
// }

echo PHP_EOL;

// Nested for loop example

for ( $i = 0; $i < 5; $i++ ) {
    for ( $j = 0; $j < 5; $j++ ) {
        if ( $i == $j ) {
            echo "i is equal to j\n";
        } elseif ( $i < $j ) {
            echo "i is less than j\n";
        } else {
            echo "i is greater than j\n";
        }
    }
}
