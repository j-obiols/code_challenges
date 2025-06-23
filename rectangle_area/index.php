<?php 

require 'functions.php';


echo "Introduce the length unit you want to use (km, hm, dam, m, dm, cm, mm):";

$unit = strtolower(readline());

$valid_unit = check_unit($unit);

if (!$valid_unit) {
           
    echo "Invalid data. Please start again.";

} else {
       
    echo "Introduce rectangle's width:";

    $width = readline(); 

    echo "Introduce rectangle's height:";

    $height = readline(); 
       
    if (is_numeric($width) && $width > 0 && is_numeric($height) && $height > 0) {

        $area = calculate_rectangle_area($width, $height);

        $response = print_response($area, $unit);

        echo $response;

    } else {
       
        echo "Invalid width and/or invalid length. Please start again."; 
    }

}