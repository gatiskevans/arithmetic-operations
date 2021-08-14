<?php

    $employees = [
        [
            'name' => "Employee1",
            'basePay' => 7.50,
            'hoursWorked' => 35
        ],
        [
            'name' => "Employee2",
            'basePay' => 8.20,
            'hoursWorked' => 47
        ],
        [
            'name' => "Employee3",
            'basePay' => 10,
            'hoursWorked' => 73
        ],

    ];

    function wages(float $basePay, float $hoursWorked): string {
        if($basePay < 8){
            return "The State requires at least minimum wage of $8.00 per hour\n";
        } else if($hoursWorked > 60){
            return "The company doesn't allow employees work more than 60 hours a week\n";
        }
        if($hoursWorked > 40){
            $overtime = $hoursWorked - 40;
            $regularHours = $hoursWorked - $overtime;
            $wages = number_format($basePay * $regularHours + $overtime * $basePay * 1.5, 2);
        } else {
            $wages = number_format($basePay * $hoursWorked, 2);
        }
        return "Your total pay is {$wages}$\n";
    }

    function main(array $employees): string {
        $result = '';
        foreach($employees as $employee){
            $result .= $employee['name'] . " - ";
            $result .= wages($employee['basePay'], $employee['hoursWorked']);
        }
        return $result;
    }

    echo main($employees);