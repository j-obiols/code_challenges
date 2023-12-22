<?php


function rotateArray(array $data, int $pos){

    $len = sizeof($data);

    foreach($data as $key => $value){

        $newKey = $key - $pos;

        while($newKey < 0){
            $newKey = $newKey + $len;
        }

        $data[$newKey] = $value;
    }
    
    return $data;

}