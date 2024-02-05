<?php

declare(strict_types = 1);
require "player.php";


$alba = new Player("Alba");


$alba -> setGrains(5);
$alba -> setOres(5);
$alba -> setWoods(5);
$alba -> setWools(5);
$alba -> setClays(5); 


echo $alba -> buyProperty("road"); 
echo $alba -> buyProperty("village"); 
echo $alba -> buyProperty("city"); 
echo $alba -> buyProperty("development card"); 


//Checking existing resources after first operations:
/* echo $alba -> getGrains()." grains.\n";
echo $alba -> getClays()." clays.\n";
echo $alba -> getOres()." ores.\n";
echo $alba -> getWoods()." woods.\n";
echo $alba -> getWools()." wools.\n"; 
*/

echo $alba -> buyProperty("road"); 
echo $alba -> buyProperty("village"); 
echo $alba -> buyProperty("city"); 
echo $alba -> buyProperty("development card"); 