<?php

    $firstNumber = readline("Enter the first number: ");
    $secondNumber = readline("Enter the second number: ");

    function checkTheNumbers(int $firstNum, int $secondNum): bool {
        return $firstNum === 15 || $secondNum === 15 ||
               $firstNum + $secondNum === 15 ||
               $firstNum - $secondNum === 15 ||
               $secondNum - $firstNum === 15;
    }

    echo checkTheNumbers($firstNumber, $secondNumber);