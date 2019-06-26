<?php

echo "What's your age?\n";

$handle = fopen ("php://stdin","r");
$age = fgets($handle);

echo ($age >= 18) ? "Welcome, my dude" : "Too young, my dude";

?>
