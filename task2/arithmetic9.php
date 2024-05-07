<?php

function calculateBMI($heightCM, $weightKGS): string
{
    $heightImperial = round($heightCM / 2.54, 2);
    $weightImperial = round($weightKGS * 2.20462, 2);

    $BMI = round($weightImperial * 703 / pow($heightImperial, 2), 2);

    if ($BMI >= 18.5 && $BMI <= 25) return "You have optimal weight, BMI - {$BMI}";
    else if ($BMI < 18.5) return "You are underweight weight, BMI - {$BMI}";
    return "You are overweight weight, BMI - {$BMI}";
}

echo calculateBMI(150, 90);