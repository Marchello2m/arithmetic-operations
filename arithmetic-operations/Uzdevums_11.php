<?php
function bmi_calculate($mass, $height, $unit) {
    $bmi = 0;
    if ($unit == "Metric") {
        //BMI = weight (kg) ÷/ ( height * height  ) in Meter
        $bmi = ($mass / ($height * $height));
    }
    if ($unit == "Imperial") {
        //BMI = weight (lb) x (height inch  * height inch ) x 703
        $bmi = ($mass / ($height * $height)) * 703;
    }
    return round($bmi, 1);
}

function bmi_weight($bmi) {

    if ($bmi < 15) {
        $output = "Very severely underweight";
    } else if ($bmi >= 15 && $bmi < 16) {
        $output = "	Severely underweight";
    } else if ($bmi >= 16 && $bmi < 18.5) {
        $output = "	Underweight";
    } else if ($bmi >= 18.5 && $bmi < 25) {
        $output = "Normal (healthy weight)";
    } else if ($bmi >= 25 && $bmi < 30) {
        $output = "Overweight";
    } else if ($bmi >= 30 && $bmi < 35) {
        $output = "Moderately obese";
    } else if ($bmi >= 35 && $bmi < 40) {
        $output = "Severely obese";
    } else {
        $output = "Very severely obese";
    }
    return $output;
}