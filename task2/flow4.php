<?php

$dayNumber = 0;

if ($dayNumber == 1) {
    echo "Monday";
} else if ($dayNumber == 2) {
    echo "Tuesday";
} else if ($dayNumber == 3) {
    echo "Wednesday";
} else if ($dayNumber == 4) {
    echo "Thursday";
} else if ($dayNumber == 5) {
    echo "Friday";
} else if ($dayNumber == 6) {
    echo "Saturday";
} else if ($dayNumber == 0) {
    echo "Sunday";
} else {
    echo "Not a valid day";
}

switch ($dayNumber) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 0:
        echo "Sunday";
        break;
    default:
        echo "Not a valid day";
}