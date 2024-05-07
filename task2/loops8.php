<?php

class NumberSquare
{
    public function squarePattern(): void
    {
        $min = (int)readline("Minimum number: ");
        $max = (int)readline("Maximum number: ");

        for ($i = $min; $i <= $max; $i++) {
            $outputNumberCounter = 0;

            for ($n = $i; $outputNumberCounter < $max - $min + 1; $n++) {
                echo "$n";
                $outputNumberCounter++;
                if ($n === $max) {
                    $n = $min - 1;
                }
            }
            echo PHP_EOL;
        }
    }
}

$numberSquare = new NumberSquare();
$numberSquare->squarePattern();