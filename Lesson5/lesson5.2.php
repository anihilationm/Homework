<?php

$check_if_prime = function ($number) {
    if ($number % 2 == 0 && $number != 2) {
        return false;
    }

    $max_factor = (int)sqrt($number);

    for ($i = 3; $i <= $max_factor; $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
};

$get_primes = function () use ($check_if_prime) {
    define("MAX", 100);
    $primes = [];
    $breaker = 0;

    for ($i=2; $i; $i++) {
        if ($check_if_prime($i)) {
            $primes[] = $i;
            $breaker += 1;
        };
        if ($breaker == MAX) {
            break;
        }
    }

    return $primes;
};

$primes_array = $get_primes();

$get_sum = function () use ($primes_array) {
    $sum = 0;
    foreach ($primes_array as $key => $value) {
        $sum += $primes_array[$key];
    }

    return $sum;
};

echo $get_sum();
