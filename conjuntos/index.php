<?php

include 'functions.php';

$array2=[1,2,3,5,7,9];
$array1=[2,3,5,7,25];

$bool = true;
var_dump(checkCommon($array1, $array2, $bool));

$bool = false;
var_dump(checkCommon($array1, $array2, $bool));