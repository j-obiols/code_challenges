<?php


function printFibonacci($length) {

    if(!is_int($length) OR $length <= 0) {

        echo "Invalid length.\n";

    } elseif($length >= 1 && $length <= 93) {

        $fibonacci = calculateFibonacci($length);

        foreach($fibonacci as $key => $value){
            echo $value."\n";
        }

    } else {
        
        echo "In this program the maximum length allowed is 93.\n";
    }
    
}


function calculateFibonacci($length): array {

    $fibonacci = array();
    
    if($length == 1) {

        $fibonacci[0] = 0; 

    } elseif($length > 1) {

        $fibonacci[0] = 0;
        $fibonacci[1] = 1;

        for($i = 2; $i <= $length-1; $i++){
        
          $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
       
        } 
    }

    return $fibonacci;
    
}