<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

for ($i = 0; $i < count($numbers); $i++)
{
    if ($numbers[$i] %3 === 0)
{
    echo $numbers[$i] . PHP_EOL;
}
}