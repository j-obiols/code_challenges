<?php

function validateData($data){
    if(ctype_digit($data) && 0 < $data  && $data <= 10){
        return true;
    }
    return false;
}


function writeWow($data){
    if(validateData($data)){
        $wow =  "W".printO($data)."w!";
        return $wow;
    } else {
       return "Invalid data.";
    }
}


function printO($data){
    $o = array();
    for($i=1; $i<=$data; $i++){
        array_push($o, "o");
    }
    $string = implode($o);
    return $string;
} 