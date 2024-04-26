<?php

// 1. Variables

$integer = 10;
$float = 10.10;
$string = "hello world";

echo "$integer $float $string\n";

var_dump($integer, $float, $string);

$firstName = "Juris";
$lastName = "Švarnovičs";
$age = 25;

$personInfo = $firstName . " " . $lastName . " " . $age . PHP_EOL;
echo $personInfo;

// 2. IF ELSE

$a = 10;
$b = "10";

if ($a === $b) {
    echo "they are equal!" . PHP_EOL;
} else echo "they arent equal!" . PHP_EOL;

$c = 50;

if ($c > 1 && $c < 100) {
    echo "is between 1 and 100!" . PHP_EOL;
} else echo "isnt between 1 and 100!" . PHP_EOL;

$hello = "hello";

if ($hello === "hello") {
    echo "world" . PHP_EOL;
}

$d = 68;

if ($d >= 50 && $d < 100 && $d % 2 == 0) {
    echo "number is more or equal to 50, less than 100 and is even" . PHP_EOL;
}

$e = 50;

$y = 40;
$z = 90;

if ($e > $y && $e < $z) {
    echo "correct" . PHP_EOL;
}

$plateNumber = "KZ-5230";

switch ($plateNumber) {
    case "KZ-5230":
        echo "this is your plate number!";
        break;
    case "LM-2130":
        echo "this isnt your plate number!";
        break;
    case "SF-6601":
        echo "this isnt your plate number!";
        break;
    default:
        echo "didnt find any inputted plate numbers";
}

$number = 111;

switch ($number) {
    case $number < 50:
        echo "low";
        break;
    case $number > 50 && $number < 100:
        echo "medium";
        break;
    case $number > 100:
        echo "high";
        break;
}

// 3. Array and objects

$values = [10, 15, 20];
$sum = $values[0] + $values[1] + $values[2];
echo PHP_EOL . $sum . PHP_EOL;

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person["name"], $person["surname"], $person["age"]);

$person1 = new stdClass();
$person1->name = "John";
$person1->surname = "Doe";
$person1->age = 50;

var_dump($person1->name, $person1->surname, $person1->age);

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][1]['name'] . " " . $items[0][1]['surname'] . " " . $items[0][1]['age'] . PHP_EOL;

echo "{$items[0][0]['name']} & {$items[0][1]['name']} {$items[0][1]['surname']}`s" . PHP_EOL;

// 4. Loops

$valuesArray = [1,2,3,4,5,6,7];

foreach ($valuesArray as $value) {
    echo $value . PHP_EOL;
}


for ($i = 0; $i < count($valuesArray); $i++) {
    echo $valuesArray[$i] . PHP_EOL;
}

$x = 1;

while ($x < 10) {
    echo "codelex" . PHP_EOL;
    $x++;
}

foreach ($valuesArray as $value) {
    if($value % 3 === 0) echo $value . PHP_EOL;
}

$persons = [];

$person2 = new stdClass();
$person2->name = "Juris";
$person2->surname = "Svarnovics";
$person2->age = 25;
$person2->birthday = "29-12-1998";

$person3 = new stdClass();
$person3->name = "Janis";
$person3->surname = "Berzins";
$person3->age = 40;
$person3->birthday = "29-12-1983";

$persons["first"] = $person2;
$persons["second"] = $person3;

foreach ($persons as $person) {
    echo "{$person->name} {$person->surname} {$person->age} {$person->birthday}" . PHP_EOL;
}