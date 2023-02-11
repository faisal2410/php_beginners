<?php

$amount = 15000;

$X = ( $amount / 100 ) * 25;
$y = ( $amount / 100 ) * 20;
$z = ( $amount / 100 ) * 15;

$result = ( $amount >= 20000 ) ? ( "You got 25% off and the amount is " . $X ) : (  ( $amount < 20000 && $amount >= 10000 ) ? ( "You got 20% off  and the amount is" . $y ) : (  ( $amount < 10000 && $amount >= 7000 ) ? "You got 15% off  and the amount is" . $z : "Invalide amount" ) );

echo $result;
