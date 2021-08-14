<?php

    //BMI = weight x 703 / height ^ 2
    //weight in pounds
    //height in inches
    //optimaL BMI 18.5 - 25
    //BMI < 18.5 underweight
    //BMI > 25 overweight
    //accept metric units

    $weightInKG = readline("Enter your weight in kilograms (KG): ");
    $heightInCM = readline("Enter your height in centimeters (CM): ");

    function bodyMassIndex(float $weight, float $height): string {
        $weightInPounds = $weight * 2.205;
        $heightInInches = $height * 0.394;

        $bmi = number_format($weightInPounds * 703 / pow($heightInInches, 2), 1);
        switch($bmi){
            case $bmi >= 18.5 && $bmi <= 25:
                $response = "Your body mass index (BMI) is {$bmi}. Your weight is optimal.";
                break;
            case $bmi < 18.5:
                $response = "Your body mass index (BMI) is {$bmi}. You are underweight.";
                break;
            case $bmi > 25:
                $response = "Your body mass index (BMI) is {$bmi}. You are overweight.";
                break;
            default:
                $response = "Something went wrong!";
                break;
        }
        return $response;
    }

    echo bodyMassIndex($weightInKG, $heightInCM);