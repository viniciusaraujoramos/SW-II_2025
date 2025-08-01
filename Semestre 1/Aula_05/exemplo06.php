<?php
    //cria um array com 3 empregados, um array recebe outro array, q recebe outro
    $empregados = array('empregados' => array(
        array(
            'nome' => 'Acacio',
            'idade' => 47,
            'genero' => 'M'
        ),
        array(
            'nome' => 'Maria',
            'idade' => 44,
            'genero' => 'F'
        ),
        array(
            'nome' => 'Vitor',
            'idade' => 25,
            'genero' => 'M'
        )));

    //converte para uma string Json
    $json_str = json_encode($empregados);

    //exibe a string json
    echo "$json_str";
?>