<?php

include('functions.php');


$array1 = [15,1,3,10];
$array2 = [15,1,3,10,0];
$array3 = [15,1,3,10,-7];
$array4 = ["hello",1,3,10];


echo findMex($array1)."\n";
echo findMex($array2)."\n";
echo findMex($array3)."\n";
echo findMex($array4)."\n";