<?php

function fizzbuzz ($read_source, $write_dest) {
    
    $file_r = fopen($read_source, r);
    $file_w = fopen($write_dest, w);
    
    while (! feof($file_r)) {
	
	$line = fgets($file_r);
	    $splitter = explode(" ", $line);
	    
	    $fizz = $splitter[0];
	    $buzz = $splitter[1];
	    $max = $splitter[2];
	    
	    $main_array = [];
	    
	    for ($i = 1; $i <= $max; $i++) {
	        
            if ($i % $fizz == 0 && $i % $buzz == 0) {
                array_push($main_array, "FB");
            } elseif ($i % $buzz == 0) {
                array_push($main_array, "B");
            } elseif ($i % $fizz == 0) {
                array_push($main_array, "F");
            } else {
                array_push($main_array, $i);
            }
        }
        
        $fb_result = implode(" ", $main_array);
        
        fwrite($file_w, $fb_result . PHP_EOL);
    }
}

//fizzbuzz("fizzbuzz_source.txt", "KUKU.txt");

?>