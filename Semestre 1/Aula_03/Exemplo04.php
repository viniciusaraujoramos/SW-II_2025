<?php

    //FUNÇÃO COM PARAMETRO E COM RETORNO

    
    function msg($x){
        $a = "Vinicius ".$x;
        return $a;
    }

    $frase = "Olá ";
    $frase .= msg("Araujo");

    echo $frase;

?>