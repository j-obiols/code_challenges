<?php
  

function drawAbacus(): array {
        
    $abacus = [];

    for ($i = 0; $i < 7; $i++) {

        $value = rand(0,9);
            
        if ($value != 0) {

            $arrayNewLine = [];

            while (count($arrayNewLine)< $value) {

                array_push($arrayNewLine, "O");

            }

            for ($m = 0; $m < 3; $m++) {

                array_push($arrayNewLine, "-");
            }

            while (count($arrayNewLine)<12) {

                array_push($arrayNewLine, "O");

            }

            $newLine = implode($arrayNewLine);

        } else {

            $newLine = "---OOOOOOOOO";
        }
           
        array_push($abacus, $newLine);
    }

    return $abacus; 
}

    

function readAbacus(array $abacus): string{

    $totalValue = 0;

    $numbers_array = [];

    foreach ($abacus as $line) {
         
        array_push($numbers_array, strpos($line, "-"));

    }
        
    foreach (array_reverse($numbers_array) as $key => $value){
             
        $totalValue = $totalValue + $value * pow(10, $key);

    }

    $totalValue = number_format($totalValue, 0, ',', '.');

    return $totalValue;

}