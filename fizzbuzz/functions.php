<?php


function fizzbuzz()
{   
    for($i = 1; $i <=100; $i++){
         
        $rem3 = $i % 3;
        $rem5 = $i % 5;

        if($rem3 != 0 && $rem5 != 0){
            echo $i."\n";    
        } elseif($rem3 == 0 && $rem5 != 0) {
            echo "fizz\n";
        } elseif($rem3 != 0 && $rem5 == 0) {
            echo "buzz\n"; 
        } else {
            echo "fizzbuzz\n";
        }
    }
}  