<?php

$elements = [1, 2, 3, 1.112, "lol"];

for ($i = 0; $i < count($elements); $i++)
{
    echo doubleUp($elements[$i]) . PHP_EOL;
}

function doubleUp($x)
{
    return $x*2;
};

