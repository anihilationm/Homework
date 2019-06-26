<?php

echo "Give it to me!\n";

$handle = fopen ("php://stdin","r");
$number = fgets($handle);

switch ($number) {
  case $number > 100:
    echo "Thanks, man!";
//TERNARKU SUDA
    switch ($number) {
      case $number > 1000:
        echo "\n!!!!WOOOOWWWW!!!";
        break;
    };

  break;
  case $number > 10 && $number < 100:
    echo "OK :(";
    break;
  default:
    echo "WHAAAAT????";
    break;
}

echo "\n";

?>
