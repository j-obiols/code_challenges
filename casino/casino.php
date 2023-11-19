<?php

function status(array $casino){

    foreach($casino as $player){
        if($player -> inCasino == true) {
            $player -> isWinning();
        }
    }
} 