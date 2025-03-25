<?php
    //string json aaray contendo 3 elementos
    $json_str = '{"empregados": '.
    '[{"nome": "Vinicius", "idade": 18, "genero": "M"},'.
    '{"nome": "Jake", "idade": 9, "genero": "M"},'.
    '{"nome": "Pedro", "idade": 17, "genero": "M"}'.
    ']}';

    //faz o parsing da string, criando o array empregados
    $jsonObj = json_decode($json_str);
    $empregados = $jsonObj->empregados;

    //vai navegar pelos elementos do array, imprimindo cada empregado
    foreach ( $empregados as $e ){
        echo "nome: $e->nome - idade: $e->idade - genero $e->genero <br>";
    }
?>