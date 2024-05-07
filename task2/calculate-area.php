<?php

class Geometry
{
    static function calculateCircleArea($radius)
    {
        if ($radius <= 0) return 'Error: radius should be > 0';
        return round(M_PI * pow($radius, 2), 2);
    }

    static function calculateRectangleArea($length, $width)
    {
        if ($length <= 0 || $width <= 0) return 'Error: length and width should be > 0';
        return round($length * $width, 2);
    }

    static function calculateTriangleArea($base, $height)
    {
        if ($base <= 0 || $height <= 0) return 'Error: base and height should be > 0';
        return round($base * $height * 0.5, 2);
    }
}

const POSSIBLE_CHOICES = ['1', '2', '3', '4'];

$userChoice = 0;

while ($userChoice != '4') {
    echo "Geometry Calculator\n";
    echo "1. Calculate the Area of a Circle\n";
    echo "2. Calculate the Area of a Rectangle\n";
    echo "3. Calculate the Area of a Triangle\n";
    echo "4. Quit\n";
    echo "Enter your choice (1-4) : ";

    $userChoice = readline();
    if (!in_array($userChoice, POSSIBLE_CHOICES, true)) {
        echo "Choice not allowed, must be 1-4\n";
        continue;
    }

    if ($userChoice == '1') {
        echo Geometry::calculateCircleArea(readline('enter radius: ')) . PHP_EOL;
    } else if ($userChoice == '2') {
        echo Geometry::calculateRectangleArea(readline('enter length: '), readline('enter width: ')) . PHP_EOL;
    } else if ($userChoice == '3') {
        echo Geometry::calculateTriangleArea(readline('enter base: '), readline('enter height: ')) . PHP_EOL;
    }
}