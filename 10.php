<?php

    class Geometry {

        public static function areaOfCircle(float $radius): string {
            $isPromptActive = true;
            while($isPromptActive) {
                if ($radius < 0) {
                    $radius = readline("Radius cannot be a negative number. Try again: ");
                } else {
                    $isPromptActive = false;
                }
            }
            return "The area of circle is : " . number_format(pi() * $radius * 2, 2). " cm";
        }

        public static function areaOfRectangle(float $length, float $width): string {
            $isPromptActive = true;
            while($isPromptActive) {
                if ($length < 0) {
                    $length = readline("Length cannot be a negative number. Try again: ");
                } else if ($width < 0) {
                    $width = readline("Width cannot be a negative number. Try again: ");
                } else {
                    $isPromptActive = false;
                }
            }
            return "The area of rectangle is : " . number_format($length * $width, 2). " cm";
        }

        public static function areaOfTriangle(float $height, float $base): string {
            $isPromptActive = true;
            while($isPromptActive) {
                if ($height < 0) {
                    $height = readline("Height cannot be a negative number. Try again: ");
                } else if ($base < 0) {
                    $base = readline("Base cannot be a negative number. Try again: ");
                } else {
                    $isPromptActive = false;
                }
            }
            return "The area of triangle is : " . number_format($base * $height * 0.5, 2) . " cm";
        }

    }

    $isMenuActive = true;

    echo "Geometry Calculator\n";
    echo "1. Calculate the Area of a Circle\n";
    echo "2. Calculate the Area of a Rectangle\n";
    echo "3. Calculate the Area of a Triangle\n";
    echo "4. Quit\n";

    while($isMenuActive){
        $option = readline("Enter your choice (1-4) : ");
        switch($option){
            case 1:
                $radius = readline("Enter the radius in cm: ");
                echo Geometry::areaOfCircle($radius);
                $isMenuActive = false;
                break;
            case 2:
                $length = readline("Enter the length in cm: ");
                $width = readline("Enter the width in cm: ");
                echo Geometry::areaOfRectangle($length, $width);
                $isMenuActive = false;
                break;
            case 3:
                $height = readline("Enter the height in cm: ");
                $base = readline("Enter the base of the triangle in cm: ");
                echo Geometry::areaOfTriangle($height, $base);
                $isMenuActive = false;
                break;
            case 4:
                echo "Bye";
                $isMenuActive = false;
                break;
            default:
                echo "The number must be between 1 - 4. Try again\n";
                break;
        }
    }






