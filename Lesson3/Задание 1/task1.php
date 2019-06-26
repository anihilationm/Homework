<?php

function read($path_to_file) {
    
    //for_read.txt
    
    $file = fopen($path_to_file, r);
    
    while (! feof($file)) {
	    $line = fgets($file);
	    echo $line;
    };
    
    fclose($file);
    return true;
}

function write($path_to_file, $new_file) {
    
    //for_read.txt
    
    $file_array = file($path_to_file);
    $new_file = fopen($new_file, w);
    
    foreach ($file_array as $key => $value) {
        if (!($key % 2)) {
           fwrite ($new_file, $value);
        }
    }
    
    fclose($new_file);
    return true;
}

//read("for_read.txt");
//write("for_read.txt", "new_file.txt");

?>