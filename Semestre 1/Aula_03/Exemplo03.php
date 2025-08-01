<?php

    //FUNÇÃO COM PARAMETRO E COM RETORNO

    
    function msg(){
        $a = "Vinicius";
        return $a;
    }

    $frase = "Olá ";
    $frase .= msg();

    echo $frase;

    // .= representa uma concatenação
?>