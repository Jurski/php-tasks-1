<?php

$person = new stdClass();

$person->name = 'John Doe';
$person->licenses = ["A1", "A2", "A3", "B1"];
$person->cash = 1000;

$guns = [];

$guns[] = (object)['name' => 'Pistol', 'license' => 'A1', 'price' => 500];
$guns[] = (object)['name' => 'Revolver', 'license' => 'A2', 'price' => 450];
$guns[] = (object)['name' => 'Rifle', 'license' => 'A3', 'price' => 1500];
$guns[] = (object)['name' => 'Shotgun', 'license' => 'B1', 'price' => 1300];
$guns[] = (object)['name' => 'Sniper Rifle', 'license' => 'B1', 'price' => 2000];
$guns[] = (object)['name' => 'Submachine Gun', 'license' => 'A1', 'price' => 1200];

foreach ($guns as $gun) {
    if (in_array($gun->license, $person->licenses) && $person->cash >= $gun->price) {
        echo "able to buy $gun->name" . PHP_EOL;
    } else {
        echo "not able to buy $gun->name" . PHP_EOL;
    }
}

