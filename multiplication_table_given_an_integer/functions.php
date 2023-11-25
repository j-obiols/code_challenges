<?php


    function createMultiplicationTable(int $n){
        for($i = 1; $i <=10; $i++) {
            echo $n." x ".$i." = ". $i * $n."\n";  
        }
    }


    function checkInputData($input){
        if(!filter_var($input, FILTER_VALIDATE_INT)) {
           return false;
        } 
        return true;
    } 