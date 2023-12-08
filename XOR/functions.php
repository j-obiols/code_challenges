<?php


function validateInput($a): bool{

    if($a == 0 OR $a == 1){
        return true;
    } 

    return false;
}



function validateXOR($a, $b) {
    
    if(validateInput($a) && validateInput($b)){
         
        if($a == $b){
            return 0;
        } 
            
        return 1;
          
    } else {
       
        return "Invalid input";
   }

} 