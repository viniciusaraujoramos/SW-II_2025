<?php
    //agr um tem dependente e o resto n, tbm foi criado o campo data
    $json_str = '{"empregados": '.
    '[{"nome": "Vinicius", "idade": 18, "genero": "M", "dependentes": ["Fulaninho","Ciclano"]},'.
    '{"nome": "Jake", "idade": 9, "genero": "M"},'.
    '{"nome": "Pedro", "idade": 17, "genero": "M"}'.
    '],
    "data": "27/07/2007"}';

    //faz o parsing da string, criando o array empregados
    $jsonObj = json_decode($json_str);
    $empregados = $jsonObj->empregados;

    //vai aparecer a data e navega pelos elementos do array, mostrando cada um
    //se tiver dependentes tbm exibe
    echo "data do arquivo:<br> $jsonObj->data<br><br>";
    foreach ( $empregados as $e ){
        echo "nome: $e->nome - idade: $e->idade - genero $e->genero <br>";
        if (property_exists($e, "dependentes")){
            $deps = $e->dependentes;
            echo "dependentes: <br>";
            foreach ($deps as $d) {
                echo "- $d<br>";
            }
        }
    }
?>