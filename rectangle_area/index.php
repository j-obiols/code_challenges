<?php 

require 'functions.php';


echo "Introduce the length unit you want to use (km, hm, dam, m, dm, cm, mm, in, ft, yd, mi, nmi):";

$unit = strtolower(readline());

if (!check_unit($unit)) {
           
    echo "Invalid unit. Please start again.";

} else {
       
    echo "Introduce rectangle's width:";

    $width = readline(); 

    if(!check_value($width)) {

        echo "Width must be a positive number.";

    } else { 

        echo "Introduce rectangle's height:";

        $height = readline(); 

        if(!check_value($height)) {

           echo "Height must be a positive number.";

        } else {

            $area = calculate_rectangle_area($width, $height);

            $response = print_response($area, $unit);

            echo $response;

        }
       
    }

}