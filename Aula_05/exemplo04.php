<?php
    //cria uma string no formato json
    $json_str = '{"Jose": 47, "Maria": 44, "Vitor": 26}';

    //transforma ela e, um array associativo
    $json_arr = json_decode($json_str, true);

    //exibe o array
    var_dump($json_arr);
?>