<?php

include 'functions.php';

$array1=[1,2,2,3,5,7,9];
$array2=[2,3,5,7,7,25,25];


$bool = true;
var_dump(checkCommon($array1, $array2, $bool));

$bool = false;
var_dump(checkCommon($array1, $array2, $bool));