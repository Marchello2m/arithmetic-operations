<?php
//Write a program called CheckOddEven which prints
// "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise.
// The program shall always print “bye!” before exiting.
function CheckOddEven( $number ){
    if($number % 2 == 0){
        echo "Even Number".PHP_EOL;
        echo "Bye!".PHP_EOL;
    }
    else{
        echo "Odd Number".PHP_EOL;
        echo "Bye!".PHP_EOL;
    }
}



CheckOddEven(5);