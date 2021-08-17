<?php

$john = new stdClass();
$john->name = 'John';
$john->lastName = 'Malkovich';
$john->age = 50;

$jane = new stdClass();
$jane->name = 'Jane';
$jane->lastName = 'Janovich';
$jane->age = 19;

$alan = new stdClass();
$alan->name = 'Alan';
$alan->lastName = 'Forbes';
$alan->age = 16;

$persons = [$john, $jane, $alan];

function isUnderage(stdClass $person): string
{
    if ($person->age >= 18){
        return "{$person->name} is of age" . PHP_EOL;
    }else {
        return "{$person->name} is underage" . PHP_EOL;
    }
};
foreach($persons as $person){
    echo isUnderage($person);
};