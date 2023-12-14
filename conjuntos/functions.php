<?php


function checkCommon(array $array1, array $array2, bool $bool): array {
    
    if($bool) {

        return findCommonValues($array1, $array2);

    } elseif(!$bool) {

        return findUncommonValues($array1, $array2);
    }
    
}


function findCommonValues(array $array1, array $array2): array{

    $array1 = array_unique($array1);
    $array2 = array_unique($array2);
    $merge = array_merge($array1, $array2);
   
    $filter= [];
    $common = [];

    foreach($merge as $value){ 
        
        if(!in_array($value, $filter)) {

            array_push($filter, $value);

        } elseif(in_array($value, $filter)) {

            array_push($common, $value);
        } 
    }

    return $common;
}


function findUncommonValues(array $array1, array $array2): array {

    $array1 = array_unique($array1);
    $array2 = array_unique($array2);
    
    $common = findCommonValues($array1, $array2);
     
    $merge = array_merge($array1, $array2);
    
    $uncommon = [];

    foreach($merge as $value) {

        if(!in_array($value, $common)){
            array_push($uncommon, $value);
        }
    }

    return $uncommon;
} 