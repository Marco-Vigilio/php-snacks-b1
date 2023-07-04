<?php
    $array1 = ["a","b","c","d","e"];
    $array2 = [1,2,3,4,5];

    $newArray = [];

    foreach ($array1 as $key => $value) {
        $newArray[$key] = $array1[$key].$array2[$key];
        var_dump($newArray[$key]);
    }
?>