<?php
  //The longer - the better

  echo "What is the length? \n";

  $handle = fopen ("php://stdin","r");
  $length = fgets($handle);

  if ($length <= 5) {
    echo "Ouch...";
  } else if ($length <= 9) {
    echo "That's bad my dude.";
  } else if ($length <= 13) {
    echo "Almost!";
  } else if ($length <= 18) {
    echo "Way to go!!!";
  } else if ($length == 666) {
    echo "WELCOME, LORD";
  } else {
    echo "Holy moly. That's some long hair you have.";
  }

?>
