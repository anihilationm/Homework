<?php

$nums = [1, 2, 6, 8, 20, -10, 25, 76, 141, 99, 230];

function find_max($arr) {
    
    $biggest = max($arr);
    return $biggest;

}

echo find_max($nums) . PHP_EOL;

?>