<?php

$letters = ["a", "b", "c", "d", "e"];

function find($array, $min, $max){
    $newArray = [];

    if($max <= count($array)){
        //var_dump($array[$min]);
        //var_dump($array[$max]);
        for ($i=0; $i < count($array); $i++) { 
            var_dump($array[$i]);
        }
        array_push($newArray, );
    }
}

find($letters, 1 , 4);

?>