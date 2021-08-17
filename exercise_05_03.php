<?php

$jane = new stdClass();
$jane->name = 'John';
$jane->lastName = 'Malkovich';
$jane->age = 50;

function underage(stdClass $person): string
{
    if ($person->age >= 18){
        return "{$person->name} is of age" . PHP_EOL;
    }else {
        return "{$person->name} is underage" . PHP_EOL;
    }
}

echo underage($jane);