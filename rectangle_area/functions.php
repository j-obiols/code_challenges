<?php 

function check_unit($unit): bool {
     
    $units = array("km", "hm", "dam", "m", "dm", "cm", "mm");

    if (!in_array($unit, $units)) {

        return false;

    } else {  

        return true;   

    }
}


function calculate_rectangle_area($width, $height): float {
 
    $area = $width * $height;

    return $area;  

}


function print_response($area, $unit) {
     
    return "Area = ".$area." ".$unit. "2";

}