<?php

class Piglet
{
    public function pigletGame():void
    {
        echo "Welcome to Piglet Game\n";

        $accumulatedPoints = 0;

        while (true) {
            $rolledNumber = rand(1, 6);

            if ($rolledNumber == 1) {
                echo "You rolled 1!" . PHP_EOL . "You got $accumulatedPoints points!";
                break;
            }

            $accumulatedPoints += $rolledNumber;

            $gameContinue = strtoupper(readline("You rolled $rolledNumber, want to roll again? Y/N"));

            if ($gameContinue === "N") {
                echo "You got $accumulatedPoints points!";
                break;
            }
        }
    }
}

$pigletGame = new Piglet();
$pigletGame->pigletGame();