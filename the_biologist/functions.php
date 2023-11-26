<?php


function selectShorter($string1, $string2){

    if(strlen($string1) <= strlen($string2)){
        return $string1;
    } else {
        return $string2;
    }

}


function findLongestCommon($string1, $string2){
    
    $shorter = selectShorter($string1, $string2);

    if($shorter == $string1) {
        $longer = $string2;
    } else {
        $longer = $string1;
    }
    
    if(str_contains($longer, $shorter)) {

        return $shorter;

    } else {

       $end= false;
       $n = strlen($shorter);

        while($end == false){
            
            for($i = 1; $i < ($n-1); $i++){
                
                for($j = 0; $j <= $i; $j++){

                    $newShorter = substr($shorter, $j, $n-$i);
                    
                    if(str_contains($longer, $newShorter)){
                        $end = true;
                        return $newShorter;
                    }
                }

            }

            $end = true;

        }
        
        return "No coincidence was found";
    }
     
} 