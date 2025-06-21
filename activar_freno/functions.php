<?php

//Repassar!!

function activarFreno() {
      
    $objetivo = 67;
    $suma = 0;
    $intentos = 10;
    $resultado = 2;
    
    while ($resultado == 2) {
        for($i=1; $i<=10; $i++) {

            echo "Entra un digito:";

            $entrada = readline();
            $intentos = $intentos - 1;

            $suma = $suma + $entrada;

            echo "CONTADOR: ".$suma."\n";

            if($suma == $objetivo) {
                echo "Conseguido!!! Freno activado!!!\n";
                $resultado = 1;
            } elseif($suma > $objetivo) {
                echo "Te has pasado.No se puede parar el tren!\n ";
                $resultado = 0;
            } else{
                echo "TE QUEDAN ".$intentos." sumandos.\n";
                $resultado = 2;
            }
            
        }
    }    

    if ($resultado == 2) {
        echo "Se han agotado las oportunidades. ";
    }
}
