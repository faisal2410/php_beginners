<?php
/*
The Fibonacci sequence is a series of numbers where each number is the sum of the two preceding numbers. The sequence starts with 0, 1, and then continues with the following terms:

0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ...

In mathematical terms, the nth term of the Fibonacci sequence, F(n), can be defined as follows:
F(n) = F(n-1) + F(n-2)
where F(0) = 0 and F(1) = 1.

*/ 
$n = 10;

$first = 0;
$second = 1;

echo "The first $n terms of Fibonacci series are: ";

for ( $i = 0; $i < $n; $i++ ) {
    if ( $i <= 1 ) {
        $next = $i;
    } else {
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
    echo $next . " ";
}

