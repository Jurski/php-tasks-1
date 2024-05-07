<?php

function myFunction($a, $b): bool
{
    if ($a == 15 || $b == 15) return true;
    if (abs($a - $b) == 15) return true;
    if ($a + $b == 15) return true;
    return false;
}