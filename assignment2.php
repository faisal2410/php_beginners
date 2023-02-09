<?php

$tutionFee = 800;
$profit = ( $tutionFee >= 20000 ) ? $tutionFee * 25 / 100 :
(  ( $tutionFee >= 10000 && $tutionFee < 20000 ) ? $tutionFee * 20 / 100 :
    (  ( $tutionFee >= 7000 && $tutionFee < 10000 ) ? $tutionFee * 15 / 100 : "data is invalid" ) );
echo $profit;
