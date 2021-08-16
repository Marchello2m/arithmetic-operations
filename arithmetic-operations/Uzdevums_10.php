<?php
//Geometry calculator:
//
//Calculate the Area of a Circle
//Calculate the Area of a Rectangle
//Calculate the Area of a Triangle
//Quit
//Enter your choice (1-4):

echo "Geometry calculator:".PHP_EOL,
"".PHP_EOL,
    "Calculate the Area of a Circle".PHP_EOL,
    "Calculate the Area of a Rectangle".PHP_EOL,
    "Calculate the Area of a Triangle".PHP_EOL,
    "Quit".PHP_EOL
;

$pi = 3.14;

$figure='';
while ($figure< 1 || $figure > 4) {

    $figure = readline("Enter your choice (1-4): ");
    }

switch ($figure) {
    case $figure == 1:
$circleRadius =readline("What is the circle's radius? ");
$circle=$pi*($circleRadius*2);
echo "Your Circle's area is : ".$circle.PHP_EOL;
        break;
    case $figure ==2:
$length=readline("What is the length of rectangle? ");
        $width=readline("What is the width of rectangle? ");
        $rectangle = $length*$width;
        echo "Your Rectangle area is : ".$rectangle.PHP_EOL;
        break;
        case $figure ==3;
        $triangleLength=readline("What is the length of triangle's base? ");
        $trianglesHeight=readline("What is the height of triangle? ");
        $trianglesArea = $triangleLength *$trianglesHeight*0.5;
        echo "Your Triangle's area is : ".$trianglesArea.PHP_EOL;
        break;
        case $figure ==4;
        echo "BB".PHP_EOL;
        break;

}

//A static method that accepts the length of a triangle’s base and the triangle’s height.
// The method should return the area of the triangle. Use the following formula:
//
//    Area = Base x Height x 0.5





//A length and width
// of a rectangle and returns the area of the rectangle. Use the following formula:
//
//    Area = Length x Width








    // Display output



// static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
//
//    Area = π * r * 2
//    Use Math.PI for π and r for the radius of the circle