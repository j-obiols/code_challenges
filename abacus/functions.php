<?php
  

function drawAbacus(): array {
        
    $abacus = array();

    for ($i = 0; $i < 7; $i++) {

        $value = rand(0,9);
            
        if ($value != 0) {

            $arrayNewLine = array();

            while (count($arrayNewLine)< $value) {

                array_push($arrayNewLine, "0");

            }

            for ($m = 0; $m < 3; $m++) {

                array_push($arrayNewLine, "-");
            }

            while (count($arrayNewLine)<12) {

                array_push($arrayNewLine, "0");

            }

            $newLine = implode($arrayNewLine);

        } else {

            $newLine = "---000000000";
        }
           
        array_push($abacus, $newLine);
    }

    return $abacus; 
}

    

function readAbacus(array $abacus): string{

    $totalValue = 0;

    $numbers_array = array();

    foreach ($abacus as $line) {
         
        $pos = strpos($line, "-");

        $number = $pos;

        array_push($numbers_array, $number);

    }
        
    $arrayReverse = array_reverse($numbers_array);

    foreach ($arrayReverse  as $key => $value){
            
        $partialValue =  $value * pow(10, $key);

        $totalValue = $totalValue + $partialValue ;

    }

    $totalValue = number_format($totalValue, 0, ',', '.');

    return $totalValue;

}