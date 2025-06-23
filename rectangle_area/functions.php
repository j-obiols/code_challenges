<?php 

function check_unit($unit): bool {
     
    $units = array("km", "hm", "dam", "m", "dm", "cm", "mm", "in", "ft", "yd", "mi", "nmi");

    if (!in_array($unit, $units)) {

        return false;

    } else {  

        return true;   

    }
    
}

function check_value($value): bool {
     
    if (!is_numeric($value) OR $value < 0 OR $value == 0) {

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