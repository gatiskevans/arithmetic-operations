<?php

    $number = readline("Please enter a number: ");

    function CheckOddEven(int $number): string {
        if($number % 2 !== 0){
            return "Odd Number\nbye!";
        }
        return "Even Number\nbye!";
    }

    echo CheckOddEven($number);