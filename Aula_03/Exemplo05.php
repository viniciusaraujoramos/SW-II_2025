<?php

    //FUNÇÃO COM PARAMETRO E COM RETORNO

    function teste($x){
        foreach ($x as $nome) {
            echo "$nome <br>";
        };

    }

    $vetor=["rua","teto","carro","casa"];

    teste($vetor)
?>