<?php


    require 'casino.php';
    require 'player.php';


    $anna = new Player("Anna");
    $omer = new Player("Omer");
    $miquel = new Player("Miquel");
    $jordi = new Player("Jordi");
    $amalia = new Player("Amalia");
    $berta = new Player("Berta");
    $cristina = new Player("Cristina");

    $casino = new Casino();

    
    $casino -> enters($anna);
    $casino-> wins($anna, 50);
    $casino -> wins($anna, -200);
    $casino -> leaves($anna);
    $casino -> enters($omer);
    $casino -> enters($jordi);
    $casino -> wins( $omer, 100);
    $casino -> enters($miquel);
    $casino -> wins( $omer,- 40);
    $casino -> leaves($omer);
    $casino -> wins($jordi, 30);
    $casino -> enters($omer);
    $casino -> wins($omer, -20);
    $casino -> status();

    $casino -> leaves($amalia);
    $casino -> wins($berta, 3);
    $casino ->enters($cristina);
    $casino-> wins($cristina, 7);
    $casino -> leaves($cristina); 
    $casino -> leaves($cristina);
    $casino -> wins($miquel, 100);
    $casino -> wins($omer, 50);
    $casino-> wins( $jordi, 200);
    $casino -> status(); 