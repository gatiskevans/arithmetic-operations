<?php

    $number = readline("Enter a positive number to calculate the factorial value: ");

    if($number > 20){
        $number = readline("Numbers larger than 20 are too large for calculation. Try again: ");
    } else if ($number < 0){
        $number = readline("Number must be a positive number. Try again: ");
    }

    function factorial(int $number): int {
        $factorial = $number;
        for($i = $number-1; $i >= 1; $i--){
            $factorial *= $i;
        }
        return $factorial === 0 ? 1 : $factorial;
    }

    echo factorial($number);