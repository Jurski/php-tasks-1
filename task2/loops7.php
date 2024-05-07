<?php

class RollTwoDice
{
    public function rollDicesGame(): void
    {
        $userInput = (int)readline("Desired sum");

        if ($userInput < 2 || $userInput > 12) {
            echo "Invalid input the sum must be between 2 and 12" . PHP_EOL;
            return;
        }

        $sum = 0;

        while ($userInput !== $sum) {
            $firstDiceNumber = rand(1, 6);
            $secondDiceNumber = rand(1, 6);

            $sum = $firstDiceNumber + $secondDiceNumber;

            echo "$firstDiceNumber + $secondDiceNumber = " . $sum . "\n";
        }
    }
}

$rollTwoDice = new RollTwoDice();
$rollTwoDice->rollDicesGame();