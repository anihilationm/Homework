<?php

function divide_on_const()
{
    define("DENOM", 5);
    $counter = 0;

    for ($i = 5; $i <= 100;) {
        if ($i % DENOM == 0) {
            $counter++;
        };

        $i += DENOM;
    };

    return $counter;
}

echo divide_on_const();
