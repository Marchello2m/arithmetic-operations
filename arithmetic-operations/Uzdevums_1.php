<?php
//

//Write a program to accept two integers and return true
// if the either one is 15 or if their sum or difference is 15.
function takeTwo($x, $y)
{
    return $x == 15 || $y == 15 || $x + $y == 15 || abs($x - $y) == 15;
}
var_dump(takeTwo(5, 3));
var_dump(takeTwo(1, 3));
var_dump(takeTwo(7.5, 7.5));