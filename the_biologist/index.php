<?php


require "functions.php";


$string1 = "ctgactgacctt";
$string2 = "actgagc";

$string3 = "cgtaattgcgat";
$string4 = "cgtacagtagc";

$string5 = "ctgggccttgaggaaaactg";
$string6 = "gtaccagtactgatagt";


echo findLongestCommon($string1, $string2)."\n";

echo findLongestCommon($string3, $string4)."\n";

echo findLongestCommon($string5, $string6)."\n"; 