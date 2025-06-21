<?php

function area_rectangle() {


    echo "Introduce rectangle's width:";

        $width= readline(); 

    echo "Introduce rectangle's height: (please use the same units)";

        $height = readline(); 


    if (is_numeric($width) && $width>0 && is_numeric($height) && $height >0) {

        $area = $width * $height;

        echo "Area = ". $area ;  

    } else {

        echo "Invalid data. Please try again.";
        
    }


}