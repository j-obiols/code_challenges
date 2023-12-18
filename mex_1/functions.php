<?php


function validateData(array $array): bool{
    foreach($array as $element){
        if(!is_integer($element) or $element < 0){
            return false;
        }
    }
    return true;
}


function setData(array $array) {
    $array = array_unique($array);
    sort($array);
    return $array;
}


function findMex(array $array){

    if(!validateData($array)){
        return "Elements must be non-negative integer numbers.";
    }

    $array = setData($array);
    
    if($array[0] > 0){
        $mex = 0;
        return $mex;
    } 

    for($i = 1; $i < sizeof($array); $i++){
       
        if($array[$i] != $array[$i-1] + 1) {
            $mex = $array[$i-1] + 1;
            return $mex; 
        }
    }

    return false;
    
}