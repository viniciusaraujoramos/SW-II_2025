<?php
    //cria um array associativo
    $idades = array("Acacio"=> 47, "Maria"=> 44, "Vitor"=> 26);

    //converte para uma string Json
    $json_str = json_encode($idades);

    //exibe a string json
    echo "$json_str";
?>