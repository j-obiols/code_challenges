<?php


function figureInNumber(int $number, int $figure): string {

    if(str_contains("$number", "$figure")) {

        return "La xifra $figure existeix dins el nombre $number.\n";

    } else {
        
        return "La xifra $figure NO existeix dins el nombre $number.\n";
    }
} 