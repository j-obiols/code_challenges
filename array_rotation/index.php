<?php

include "functions.php";


$array1 = [25,12,23];
$array2 = [31,12,23];
$array3 = ["Bones","Festes","!"];
$array4 = ["a", "b", "c", "d"];
$array5 = ["h", "o", "l", "a"];


var_dump(rotateArray($array1, 1));
var_dump(rotateArray($array2, 3));
var_dump(rotateArray($array3, 2));
var_dump(rotateArray($array4, 6));
var_dump(rotateArray($array5, 7));