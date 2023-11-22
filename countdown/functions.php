<?php


function countdown($num, $interval) {

    if(($num <= 0) or (!is_int($num)) or ($interval <= 0) or (!is_int($interval))){
      echo "Some input value is not valid.\n";
    } else {
        echo $num;
        while($num > 0) {
            sleep($interval);
            echo "\r".($num - 1);
            $num -= 1 ;
        }
    }

} 