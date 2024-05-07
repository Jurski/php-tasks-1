<?php

$gameBoard = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-']
];

$winningCombinations = [
    [[0, 0], [0, 1], [0, 2]],
    [[1, 0], [1, 1], [1, 2]],
    [[2, 0], [2, 1], [2, 2]],
    [[0, 0], [1, 0], [2, 0]],
    [[0, 1], [1, 1], [2, 1]],
    [[0, 2], [1, 2], [2, 2]],
    [[0, 0], [1, 1], [2, 2]],
    [[0, 2], [1, 1], [2, 0]]
];

function display_board(array $gameBoard): void
{
    for ($row = 0; $row < 3; $row++) {
        echo " {$gameBoard[$row][0]} | {$gameBoard[$row][1]} | {$gameBoard[$row][2]} \n";
        if ($row < 2) echo "---+---+---\n";
    }
}


display_board($gameBoard);
$gameIsActive = true;

$currentPlayer = 'X';
$roundCount = 0;

while ($gameIsActive) {
    $userInput = readline("$currentPlayer player enter row and col to place");

    [$row, $col] = explode(" ", $userInput);
    $row = (int)$row;
    $col = (int)$col;

    if ($gameBoard[$row][$col] !== '-') {
        echo "this cell is already taken!";
        continue;
    }

    $gameBoard[$row][$col] = $currentPlayer;
    $roundCount++;

    foreach ($winningCombinations as $combination) {
        [$first, $second, $third] = $combination;
        [$firstRow, $firstCol] = $first;
        [$secondRow, $secondCol] = $second;
        [$thirdRow, $thirdCol] = $third;
        if ($gameBoard[$firstRow][$firstCol] === $currentPlayer
            && $gameBoard[$secondRow][$secondCol] === $currentPlayer
            && $gameBoard[$thirdRow][$thirdCol] === $currentPlayer) {
            echo "player $currentPlayer win" . PHP_EOL;
            $gameIsActive = false;
            break;
        }
    }

    display_board($gameBoard);

    if ($roundCount === 9) {
        echo 'its a tie';
        $gameIsActive = false;
    }

    $currentPlayer === 'X' ? $currentPlayer = 'O' : $currentPlayer = 'X';
}
