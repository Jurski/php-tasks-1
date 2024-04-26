<?php

//exercise 1

function firstFunction($a, $b): bool
{
    if ($a == 15 || $b == 15) return true;
    if (abs($a - $b) == 15) return true;
    if ($a + $b == 15) return true;
    return false;
}

//exercise 2

function checkOddEven($number)
{
    if ($number % 2 == 0) {
        echo "Even Number\n";
    } else {
        echo "Odd Number\n";
    }

    echo "bye!\n";
}

//exercise 3

$lowerBound = 1;
$upperBound = 100;

$sum = 0;

for ($i = $lowerBound; $i <= $upperBound; $i++) {
    $sum = $sum + $i;
}

$average = $sum / ($upperBound - $lowerBound + 1);


echo "The sum of $lowerBound to $upperBound is $sum\n";
echo "The average is $average\n";

// exercise 4

function factorial($n) {
    $result = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

// exercise 5

$randomNumber = rand(1, 100);

echo "I'm thinking of a number between 1-100. Try to guess it.\n";
$userGuess = (int) readline("Please enter the number: ");

if ($userGuess === $randomNumber) {
    echo "You guessed it! What are the odds?!?\n";
} elseif ($userGuess > $randomNumber) {
    echo "Sorry, you are too high. I was thinking of $randomNumber.\n";
} elseif ($userGuess < $randomNumber) {
    echo "Sorry, you are too low. I was thinking of $randomNumber.\n";
}