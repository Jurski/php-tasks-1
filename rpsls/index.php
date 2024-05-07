<?php

$choices = ["rock", "paper", "scissors", "lizard", "spock"];
$gameActive = true;
$gameRules = [
    "rock" => ["scissors", "lizard"],
    "paper" => ["rock", "spock"],
    "scissors" => ["paper", "lizard"],
    "lizard" => ["spock", "paper"],
    "spock" => ["rock", "scissors"],
];

while ($gameActive) {
    $playerChoice = strtolower(readline('Chose rock paper scissors lizard or spock: '));

    if (!in_array($playerChoice, $choices)) {
        echo "Please enter a valid choice" . PHP_EOL;
        continue;
    }

    $computerChoice = $choices[array_rand($choices, 1)];
    echo "Computer chose $computerChoice " . PHP_EOL;

    if ($playerChoice === $computerChoice) {
        echo "its a tie!";
        $gameActive = false;
    } else if (in_array($computerChoice, $gameRules[$playerChoice])) {
        echo "You win!";
        $gameActive = false;
    } else {
        echo "You lose!";
        $gameActive = false;
    }
}



