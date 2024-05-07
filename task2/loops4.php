<?php

class FizzBuzz
{
    public function runFizzBuzz(): void
    {
        $upperLimit = readline("Enter an integer: ");  //
        $lineCounter = 0;

        for ($i = 1; $i <= $upperLimit; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                echo "FizzBuzz ";
            } else if ($i % 3 === 0) {
                echo "Fizz ";
            } else if ($i % 5 === 0) {
                echo "Buzz ";
            } else {
                echo "$i ";
            }

            $lineCounter++;

            if ($lineCounter === 20) {
                echo PHP_EOL;
                $lineCounter = 0;
            }
        }
    }
}

$fizzBuzz = new FizzBuzz();
$fizzBuzz->runFizzBuzz();
