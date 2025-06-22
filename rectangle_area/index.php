<?php 

require 'functions.php';


echo "Introduce the length unit you want to use (km, hm, dam, m, dm, cm, mm):";

$unit = strtolower(readline());

$response = check_unit($unit);

if ($response == false) {
           
    echo "Invalid data. Please try again";

} else {
       
    echo "Introduce rectangle's width:";

    $width = readline(); 

    echo "Introduce rectangle's height:";

    $height = readline(); 
       
    if (is_numeric($width) && $width > 0 && is_numeric($height) && $height > 0) {

        area_rectangle($unit, $width, $height);

    } else {
       
        echo "Invalid width and/or invalid length. Please start again."; 
    }

}