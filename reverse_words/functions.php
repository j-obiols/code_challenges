<?php


function reverseCases($cases){

    foreach($cases as $key => $value){

        echo "Case #".($key + 1).": ". reverseWords($value)."\n";
    }
}


function reverseWords($string){

    $wordsArray = explode(" ", $string);
    $n = count($wordsArray);
    $newArray = array();

    for($i = 0; $i <= $n-1; $i++){
        $newArray[$i]= $wordsArray[($n-1)-$i];
    }

    $newString = implode(" ", $newArray);

    return $newString;
} 