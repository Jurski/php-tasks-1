<?php

$word1 = readline("Enter the first word: ");
$word2 = readline("Enter the second word: ");

$twoWordLength = strlen($word1) + strlen($word2);
$dotSeparator = '';

$dotAmount = 30 - $twoWordLength;

for ($i = 0; $i < $dotAmount; $i++) {
    $dotSeparator .= '.';
}

echo $word1 . $dotSeparator . $word2 . PHP_EOL;