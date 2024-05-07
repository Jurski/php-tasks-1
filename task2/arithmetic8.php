<?php

const MINIMUM_WAGE = 8.00;
const MAXIMUM_HOURS = 60;
const REGULAR_HOURS = 40;
const OVERTIME_RATE = 1.5;

function calculatePay(float $basePay, int $hoursWorked): string
{
    if ($basePay < MINIMUM_WAGE) return "Error: Base pay mustn't be less than " . MINIMUM_WAGE;

    if ($hoursWorked > MAXIMUM_HOURS) return "Error: Number of hours shouldnt exceed " . MAXIMUM_HOURS;

    if ($hoursWorked > REGULAR_HOURS) {
        $overtimeHours = $hoursWorked - REGULAR_HOURS;
        $regularPay = REGULAR_HOURS * $basePay;
        $overtimePay = $overtimeHours * $basePay * OVERTIME_RATE;
        $totalPay = $regularPay + $overtimePay;
    } else {
        $totalPay = $hoursWorked * $basePay;
    }

    return "Payment amount: $" . number_format($totalPay, 2);
}

echo calculatePay(7.50, 35) . PHP_EOL;
echo calculatePay(8.20, 47) . PHP_EOL;
echo calculatePay(10.00, 73) . PHP_EOL;
