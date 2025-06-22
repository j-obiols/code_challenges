<?php 

function check_unit($unit) {
     
    $units = array("km", "hm", "dam", "m", "dm", "cm", "mm");

    if (!in_array($unit, $units)) {

        return false;

    } else {  

        return true;   

    }
}

function area_rectangle($unit, $width, $height) {
 
    $area = $width * $height;

    echo "Area = ". $area." ".$unit. " 2 " ;  

}