<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$userInput = (int)readline("Enter the value to search for: ");

if (in_array($userInput, $numbers, true)) echo "Number you searched for is in the array!";
else echo "Number you searched for is not in the array!";