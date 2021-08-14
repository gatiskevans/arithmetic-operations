<?php

    $number = range(1, 110);

    function cozaLozaWoza(array $numberRange): string {
        $printNumbers = '';
        foreach($numberRange as $number){
            if($number % 11 === 1){
                $printNumbers .= "\n";
            }
            switch($number){
                case $number % 3 === 0 && $number % 5 === 0 && $number % 7 === 0:
                    $printNumbers .= "CozaLozaWoza ";
                    break;
                case $number % 3 === 0 && $number % 7 === 0:
                    $printNumbers .= "CozaWoza ";
                    break;
                case $number % 5 === 0 && $number % 7 === 0:
                    $printNumbers .= "LozaWoza ";
                    break;
                case $number % 3 === 0 && $number % 5 === 0:
                    $printNumbers .= "CozaLoza ";
                    break;
                case $number % 3 === 0:
                    $printNumbers .= "Coza ";
                    break;
                case $number % 5 === 0:
                    $printNumbers .= "Loza ";
                    break;
                case $number % 7 === 0:
                    $printNumbers .= "Woza ";
                    break;
                default:
                    $printNumbers .= "{$number} ";
                    break;
            }
        }
        return $printNumbers;
    }

    echo cozaLozaWoza($number);
