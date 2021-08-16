<?php
//Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters. The formula in Math notation is:
//
//Gravity formula
//
//Note: The correct value is -490.5m.
$xi =0;
$a= -9.81;
$t= 10;
$vi=0;



$m=0.5*$a*(($t*$t))+$vi *($t)+$xi;
echo $m."m".PHP_EOL;

