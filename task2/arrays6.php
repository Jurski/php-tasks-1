<?php

$words = ["plane", "keyboard", "psychology", "communication", "impossible", "weather"];
$playerMisses = 0;
$wordToGuess = $words[rand(0, 5)];
$letters = str_split($wordToGuess);
$gameActive = true;
$playerGuesses = [];
$incorrectGuesses = [];

for ($i = 0; $i < count($letters); $i++) {
    $playerGuesses[$i] = "_";
}

while ($gameActive && $playerMisses !== 3) {
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;

    echo "Word: ";
    foreach ($playerGuesses as $guess) {
        echo $guess;
    }

    echo PHP_EOL . "Misses: ";
    foreach ($incorrectGuesses as $guess) {
        echo $guess;
    }
    echo PHP_EOL;

    $guessedLetter = readline("Guess: ");
    $letterFound = false;

    foreach ($letters as $index => $letter) {
        if ($letter === $guessedLetter) {
            $playerGuesses[$index] = $letter;
            $letterFound = true;
        }
        if (!in_array('_', $playerGuesses)) {
            $gameActive = false;
        }
    }

    if (!$letterFound) {
        $playerMisses++;
        array_push($incorrectGuesses, $guessedLetter);
    }
}