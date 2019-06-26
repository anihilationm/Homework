<?php

$text_arr = ["So close no matter how far",
            "Couldn't be much more from the heart",
            "Forever trusting who we are",
            "And nothing else matters",
            "Never opened myself this way",
            "Life is ours, we live it our way",
            "All these words I don't just say",
            "And nothing else matters",
            "Trust I seek and I find in you",
            "Everyday for us something new",
            "Open mind for a different view",
            "And nothing else matters"];
            
function char_count ($array, $string_num) {
    
    $target_string = $array[$string_num];
    
    foreach (count_chars($target_string, 1) as $key => $value) {
        echo "The specified string contains: " . $value . " occurences of " . chr($key) . PHP_EOL;
    }
    
    return true;
}

char_count($text_arr, 1);

?>