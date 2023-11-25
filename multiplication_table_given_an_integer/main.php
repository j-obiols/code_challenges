<?php

    include "functions.php";


    $n = readline("Enter an integer number: ");



    if(checkInputData($n)) {
        createMultiplicationTable($n);
    } else {
        echo "Invalid input.";
    } 