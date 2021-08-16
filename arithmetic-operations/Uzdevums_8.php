<?php
//Foo Corporation needs a program to calculate how much to pay their hourly employees.
// The US Department of Labor requires that employees get paid time and a half for any hours over 40
// that they work in a single week. For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay.
// The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
// Foo Corp requires that an employee not work more than 60 hours in a week.

$employee1 = new stdClass();
$employee1->name='employee1';
$employee1->basePay=7.50;
$employee1->hoursWorked =35;

$employee2 = new stdClass();
$employee2->name='employee2';
$employee2->basePay=8.20;
$employee2->hoursWorked =47;

//40 *8.20 =328
// bonus 17 *(8*1.5)=204

$employee3 = new stdClass();
$employee3->name ='employee3';
$employee3->basePay=10.00;
$employee3->hoursWorked =73;

$workers =[$employee1,$employee2,$employee3];
//An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
   // For every hour over 40, they get overtime = (base pay) × 1.5.
//The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
    //If the number of hours is greater than 60, print an error message.

//Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.

foreach($workers as $worker)
{
    $x = $worker->basePay;
    $y = $worker->hoursWorked;

    $extra= $y-40;
    $bonus = $extra * ($x*1.5);
    $mul = $y * $x;


    if( $worker->hoursWorked <=40)
    {
        echo "ERRRORRR {$worker->name} Worked {$worker->hoursWorked} Hours .He will get {$mul} $".  PHP_EOL;
    } elseif($worker->hoursWorked >=40){
        echo "{$worker->name} Worked {$worker->hoursWorked} Hours . He will get {$mul} $.And he will get over time bonus {$bonus} $". PHP_EOL;
    }elseif ($worker->basePay>8)
    {
        echo "error";
    }
}




// Write a main method that calls this method for each of these employees:

