<?php

    $start = readline("Enter the starting number: ");
    $end = readline("Enter the ending number: ");

    if($end < $start){
        $end = readline("End number must be equal or larger than starting number. Try again: ");
    }

    function sumAndAverage(int $lowerBound, int $upperBound): string {
        $produceRange = range($lowerBound, $upperBound);

        $sum = array_sum($produceRange);
        $average = $sum / count($produceRange);
        return "The sum of {$lowerBound} to {$upperBound} is {$sum}\nThe average is {$average}";
    }

    echo sumAndAverage($start, $end);