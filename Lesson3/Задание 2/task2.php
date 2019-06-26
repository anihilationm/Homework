<?php

function reading_writing($file_r, $file_w) {
    
    $file_array = file($file_r);
    $reading_source = fopen ($file_r, r);
    $writing_source = fopen ($file_w, w);
    
    $strings_num = count($file_array);
    $total_length = 0;
    
    while (! feof($reading_source)) {
        
        $line = fgets($reading_source);
        $length = mb_strlen($line);
        $total_length += $length;
        
    }
    
    $average_length = round($total_length / $strings_num);
    
    foreach ($file_array as $key => $string) {
        
        if (mb_strlen($string) > $average_length) {
            fwrite($writing_source, $string);
        }
        
    }

}

// for_read.txt
// reading_writing("for_read.txt", "BINGO.txt");

?>