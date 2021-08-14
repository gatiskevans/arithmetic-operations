<?php

    //x(t) = 0.5 x at2 + vit + xi
    //a = -9.81 m/s2
    //t = 10
    //vi - initial velocity = 0
    //xi - initial position = 0

    $time = 10;
    $initialVelocity = 0;
    $initialPosition = 0;

    function computePosition(int $time, int $initialVelocity, int $initialPosition): string {
        $acceleration = -9.81;
        $position = 0.5 * $acceleration * pow($time, 2) + $initialVelocity * $time + $initialPosition;
        return "The object after falling for {$time} seconds changed it's position {$position} meters.";
    }

    echo computePosition($time, $initialVelocity, $initialPosition);