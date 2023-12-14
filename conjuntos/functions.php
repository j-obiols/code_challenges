<?php


function checkCommon(array $array1, array $array2, bool $bool): array {
    
    $merge = array_merge($array1, $array2);
   
    $firstFilter= [];
    $common = [];
    $uncommon = [];

    foreach($merge as $member){ 
        
        if(!in_array($member, $firstFilter)){
            array_push($firstFilter, $member);
        } elseif(in_array($member, $firstFilter)){
            array_push($common, $member);
        } 
    }

    foreach($firstFilter as $member){
        if(!in_array($member, $common)){
           array_push($uncommon, $member);
        }
    }

    if($bool){
        return $common;
    }elseif(!$bool){
        return $uncommon;
    }
    
};