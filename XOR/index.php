<?php

require "functions.php";


$m = "m";
$n = 0;

echo validateXOR($m, $n)."\n";

$m = 0;
$n = 0;

echo validateXOR($m, $n)."\n";

$m = 1;
$n = 1;

echo validateXOR($m, $n)."\n";

$m = 0;
$n = 1;

echo validateXOR($m, $n)."\n";

$m = 1;
$n = 0;

echo validateXOR($m, $n)."\n";