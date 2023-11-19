<?php


    require 'player.php';
    require 'casino.php';


    $anna = new Player("Anna");
    $omer = new Player("Omer");
    $miquel = new Player("Miquel");
    $jordi = new Player("Jordi");
    $amalia = new Player("Amalia");
    $berta = new Player("Berta");
    $cristina = new Player("Cristina");

    $casino = array();
    array_push($casino, $anna, $omer, $miquel, $jordi, $amalia, $berta, $cristina);

    
    $anna-> enters();
    $anna -> wins(50);
    $anna -> wins(-200);
    $anna -> leaves();
    $omer -> enters();
    $jordi -> enters();
    $omer -> wins(100);
    $miquel -> enters();
    $omer -> wins(-40);
    $omer -> leaves();
    $jordi -> wins(30);
    $omer -> enters();
    $omer -> wins(-20);
    status($casino);

    $amalia -> leaves();
    $berta -> wins(3);
    $cristina-> enters();
    $cristina-> wins(7);
    $cristina -> leaves();
    $cristina -> leaves();
    $miquel -> wins(100);
    $omer -> wins(50);
    $jordi -> wins(200);
    status($casino); 