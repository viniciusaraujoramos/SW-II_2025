<?php

echo "EXERCÍCIO 1 <br>";
    $nome="vcin";
    function saudacao(){
        $nome="vcin";
        echo "Seja bem vindo $nome <br>";
    }
    saudacao();

echo "EXERCÍCIO 2 <br>";
    function subtracao($NUM1, $NUM2){
        $sub=$NUM1-$NUM2;
        echo "A subtração de $NUM1 e $NUM2 é igua a $sub <BR>";
    }
    subtracao(6,2);

echo "EXERCÍCIO 3 <br>";

    function par($num){
        echo $num;
        echo "<br>";

        if($num%2==0)
            echo "Número PAR";
        else
            echo "Número IMPAR";
        echo "<br>";
    }
    par(7);

echo "EXERCÍCIO 4 <br>";

    function tabu($conta){
        for($mult=1;$mult<=10;$mult++){
            $resul=$conta*$mult;
            echo $resul;
            echo"<br>";
        }
    }
    tabu(5);

echo "EXERCÍCIO 5 <br>";

    function somaArray($numeros) {
        $soma = 0;
        foreach ($numeros as $numero) {
            $soma += $numero;
        }
        echo $soma;
        echo "<br>";
    }
    somaArray($array = [1, 2, 3, 4, 5]);

echo "EXERCÍCIO 6 <br>";

    function aleatorio(){
        $lista = [];
        for($c=0; $c<=10; $c++){
            $lista[]= rand(1,500);
        }
        foreach ($lista as $l){
            echo $l;
            echo "<br>";
        }
    }

    aleatorio();

echo "EXERCÍCIO 7 <br>";

    function fatorial ($valor){
        $resultado=1;
        for($i=1;$i<=$valor;$i++){
            $resultado*=$i;
        }
        echo $resultado;
    }
    fatorial(5);

?>