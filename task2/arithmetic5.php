<?php

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