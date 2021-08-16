<?php
//Write a program to produce the sum of 1, 2, 3, ..., to 100.
$sum = 0;
for($x=1; $x<=100; $x++)
{
    $sum +=$x;
}
echo "The sum of  1 to 100 is $sum"."\n";
// Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
// Also compute and display the average. The output shall look like:
//

function average($sum)
{
    return $sum/100;
}

echo "The average ".average($sum) .PHP_EOL;





//The sum of 1 to 100 is 5050
//The average is 50.5