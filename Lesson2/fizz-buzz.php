<?php

echo "Enter the FIZZ number\n";
$handle = fopen ("php://stdin","r");
$fizz = fgets($handle);

echo "Enter the BUZZ number\n";
$buzz = fgets($handle);

echo "Enter the MAX number\n";
$max = fgets($handle);

for ($i = 1; $i <= $max; $i++) {
    if ($i % $fizz == 0 && $i % $buzz == 0) {
        echo "FB ";
    } elseif ($i % $buzz == 0) {
        echo "B ";
    } elseif ($i % $fizz == 0) {
        echo "F ";
    } else {
        echo "$i ";
    }
}

?>
