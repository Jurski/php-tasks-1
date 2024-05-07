<?php

$number = (float)readline("Enter the number: ");

if ($number > 0) {
    echo "The number is positive.";
} else if ($number == 0) {
    echo "The number is zero.";
} else {
    echo "The number is negative.";
}