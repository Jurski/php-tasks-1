<?php

$elements = [];

for ($i = 0; $i < 10; $i++) {
    $elements[$i] = rand(1, 100);
}

$elementsCopy = [...$elements];
$elements[count($elements) - 1] = -7;

foreach ($elements as $element) {
    echo $element . ' ';
}

echo PHP_EOL;

foreach ($elementsCopy as $element) {
    echo $element . ' ';
}
