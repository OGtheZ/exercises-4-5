<?php

$john = new stdClass();
$john->name = 'Ivars';
$john->lastName = "Berzins";
$john->age = 50;
$john->DOB = '08.08.1971';

$jane = new stdClass();
$jane->name = 'Jana';
$jane->lastName = 'Janovicha';
$jane->age = 40;
$jane->DOB = '07.07.1981';

$persons = [$john, $jane];

foreach($persons as $person)
{
    echo "{$person->name}" . ", ", "{$person->lastName}" . ", ", "{$person->age}" . ", ", "{$person->DOB}" . PHP_EOL;
}