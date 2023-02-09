<?php

/*
Learning patterns using loops in PHP has several benefits, including:

Improving problem-solving skills: Creating patterns using loops helps in understanding how to break down a problem into smaller, manageable parts and find a solution by iterating through them.

Improving logic building skills: Patterns using loops require you to think logically about the flow of the program and how the variables change at each iteration. This helps in developing better problem-solving skills and improving overall programming ability.

Understanding loops: Loops are a fundamental concept in programming and learning patterns using loops will give a deeper understanding of how loops work and how to use them effectively.

Efficient Code Writing: By learning patterns using loops, you can write code that is more efficient and faster. This is because loops allow you to perform repetitive tasks with ease, without having to write the same code multiple times.

Reusability: Patterns created using loops can be easily reused in different projects. This can save time and effort in writing new code and reduces the chance of errors and bugs.

Overall, learning patterns using loops in PHP is an important step in becoming a proficient and skilled programmer.






*/ 
// Pattern 1 (triangle)

// for($i=1; $i<=5; $i++){

//     for($j=1; $j<=$i*4+1; $j++){
//         echo " $j ";
//     }


//     echo PHP_EOL;
// }

// for ( $i = 1; $i <= 5; $i++ ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " * ";
//     }
//     echo PHP_EOL;
// }

// Pattern 2 (triangle with number)


// for ( $i = 1; $i <= 5; $i++ ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " $i ";
//     }
//     echo "\n";
// }

// Pattern 3

// for ( $i = 1; $i <= 5; $i++ ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " $j ";
//     }
//     echo PHP_EOL;
// }

// Pattern 4 (Reverse Triangle)


// for ( $i = 10; $i >= 1; $i-- ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " * ";
//     }
//     echo PHP_EOL;
// }

// Pattern 5

// for ( $i = 5; $i >= 1; $i-- ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " $i ";
//     }
//     echo PHP_EOL;
// }

// Pattern 6

// for ( $i = 5; $i >= 1; $i-- ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " $j ";
//     }
//     echo PHP_EOL;
// }

// Pattern 7 (Pyramid)

$rows = 4;
for ( $i = 1; $i <= $rows; $i++ ) {
    for ( $j = 1; $j <= $rows - $i; $j++ ) {
        echo " ";
    }
    for ( $j = $i; $j <= $i * 2 - 1; $j++ ) {
         echo  " ";
        echo "*" . " ";
    }
    echo "\n";
}





// Pattern 8

// $str = "FAISAL";
// $count = strlen( $str );
// for ( $i = 0; $i < $count; $i++ ) {
//     for ( $j = 0; $j <= $i; $j++ ) {
//         echo " $str[$j] ";
//     }
//     echo PHP_EOL;
// }


// $str = "OSTAD";
// $count = strlen( $str );
// for ( $i = 0; $i < $count; $i++ ) {
//     for ( $j = 0; $j <= $i; $j++ ) {
//         echo " $str[$j] ";
//     }
//     echo PHP_EOL;
// }

// Pattern 9  (Rectangle)

// $n = 5;
// for ( $i = 1; $i <= $n; $i++ ) {
//     for ( $j = 1; $j <= $n; $j++ ) {
//         if ( $i == 1 || $i == $n || $j == 1 || $j == $n ) {
//             echo "*";
//         } else {
//             echo " ";
//         }
//     }
//     echo "\n";
// }

// Pattern 10

// $n = 5;
// for ( $i = 1; $i <= $n; $i++ ) {
//     for ( $j = 1; $j <= $n; $j++ ) {
//         if ( $j == $i ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     }
//     echo "\n";
// }

// Pattern 11

// $n = 5;
// for ( $i = 1; $i <= $n; $i++ ) {
//     for ( $j = 1; $j <= $n; $j++ ) {
//         if ( $j == $i || $i + $j == $n + 1 ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     }
//     echo "\n";
// }

// Pattern 12

// $n = 4;

// for ( $i = 1; $i <= $n; $i++ ) {
//     for ( $j = 1; $j <= ( 2 * $n ) - 1; $j++ ) {
//         if ( $j >= $n - ( $i - 1 ) && $j <= $n + ( $i - 1 ) ) {
//             echo "*";
//         } else {
//             echo "  ";
//         }
//     }
//     echo "\n";
// }

for ( $i = $n - 1; $i >= 1; $i-- ) {
    for ( $j = 1; $j <= ( 2 * $n ) - 1; $j++ ) {
        if ( $j >= $n - ( $i - 1 ) && $j <= $n + ( $i - 1 ) ) {
            echo "*";
        } else {
            echo "  ";
        }
    }
    echo "\n";
}