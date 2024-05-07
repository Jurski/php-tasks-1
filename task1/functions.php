<?php

function appendCodelex(string $input): string
{
    return $input . "codelex";
}

echo appendCodelex("test") . PHP_EOL;

function multiply(int $a, int $b): int
{
    return $a * $b;
}

echo multiply(10, 5) . PHP_EOL;

$person = new stdClass();
$person->name = "Juris";
$person->surname = "Svarnovics";
$person->age = 25;

$person1 = new stdClass();
$person1->name = "Janis";
$person1->surname = "Berzins";
$person1->age = 17;

$person2 = new stdClass();
$person2->name = "Anna";
$person2->surname = "Lapa";
$person2->age = 15;

function reachedEighteen(object $person): string
{
    if ($person->age >= 18) return "Has reached age of 18\n";
    return "Has not reached age of 18\n";
}

echo reachedEighteen($person);

$persons = [$person, $person1, $person2];

foreach ($persons as $person) {
    echo reachedEighteen($person);
}

$fruits = [
    [
        'name' => 'apple',
        'weight' => 30,
    ],
    [
        'name' => 'banana',
        'weight' => 8,
    ],
    [
        'name' => 'pear',
        'weight' => 50,
    ],
    [
        'name' => 'kiwi',
        'weight' => 9,
    ]
];

$shippingCosts = [
    'standard' => 1,
    'overweight' => 2,
];

function determineShippingCost(int $weight, array $costs): int
{
    if ($weight > 10) return $costs['overweight'];
    return $costs['standard'];
}


foreach ($fruits as $fruit) {
    $cost = determineShippingCost($fruit['weight'], $shippingCosts);
    echo "{$fruit['name']} with weight {$fruit['weight']}kg and shipping cost of $cost\n";
}

$elements = [3, 6, 8, 1.5, "hello"];

function doubleIfInteger($number)
{
    if (is_int($number)) return $number * 2;
    return $number;
}

for ($i = 0; $i < count($elements); $i++) {
    $result = doubleIfInteger($elements[$i]);
    if (is_int($result)) {
        echo $result . PHP_EOL;
    }
}
