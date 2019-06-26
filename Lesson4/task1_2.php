<?php

$strings = ["Потерявшийся ребенок",
     "Должен помнить, что его",
     "Отведут домой, как только",
     "Назовет он адрес свой.",
     "Надо действовать умнее,",
     "Говорите: Я живу Возле пальмы с обезьяной На далеких островах.",
     "Потерявшийся ребенок,",
     "Если он не дурачок,",
     "Не упустит верный случай",
     "В разных странах побывать."];
     

function longest_str($str_arr) {
    
    $arr_length = [];
    
    foreach ($str_arr as $key => $string) {
        $arr_length[$key] = mb_strlen($string);
    }
    
    $length = max($arr_length);
    $length_key = array_search($length, $arr_length);
    $the_longest_string = $str_arr[$length_key];
    
    return $the_longest_string;
}

echo longest_str($strings) . PHP_EOL;

?>