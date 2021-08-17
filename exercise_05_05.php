<?php

$fruits = [
    ["fruit" => "apple",
        "weight" => 1000],
    ["fruit" => "pear",
        "weight" => 1100],
    ["fruit" => "pomelo",
        "weight" => 2500],
    ["fruit" => "watermelon",
        "weight" => 11000]
];

function heaviness($a = []): string
{
    $shippingCosts = [100, 200];
    if ($a["weight"] > 10000)
    {
        return $shippingCosts[1];
    }
    else{
        return $shippingCosts[0];
    }
};

foreach($fruits as $fruit)
{
    echo $fruit["fruit"] . ", the shipping cost is " . heaviness($fruit) . " the weight is: " . $fruit["weight"] . PHP_EOL;
}

