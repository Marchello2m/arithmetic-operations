<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.



function compute($n)
{
    if ($n == 0)
        return 1;
    return $n * compute($n - 1);
}


$num = 10;
echo "Compute of ", $num, " is ", compute($num).PHP_EOL;