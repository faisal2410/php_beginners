<?php

// continue

// for ( $count = 0; $count <= 10; $count++ ) {
//     if ( $count % 2 !== 0 ) {continue;}
//     echo $count . ", ";
// }


 // what's wrong with this?

// $count = 0;
// while ( $count <= 10 ) {
//     if ( $count == 5 ) {
//         $count++;
//         continue;
//     }
//     echo $count . ", ";
//     $count++;
// }




 // loop inside a loop with continue

for ( $i = 0; $i <= 5; $i++ ) {
    // if ( $i % 2 == 0 ) {continue ( 1 );}
    if ( $i  == 2 ) {continue ( 1 );}
    for ( $k = 0; $k <= 5; $k++ ) {
        if ( $k == 3 ) {continue ( 2 );}
        echo $i . "-" . $k . PHP_EOL;
    }
}

