<?php



function findCircularNumbers($number) {
    
    if(!is_numeric($number)) {

        return "This is not an integer number.";
    }

    $number = strval($number);

    $numberOfCircularNumbers = 0;

    $circularnumbers = [0, 6, 8, 9];

    foreach($circularnumbers as $circularNumber) {

       $n = substr_count($number, $circularNumber);

       $numberOfCircularNumbers += $n;

    }

    return $numberOfCircularNumbers;
      
} 