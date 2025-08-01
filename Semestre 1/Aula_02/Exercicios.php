<?php

//Exercício 1
echo "EXERCÍCIO 1";
echo "<br>";

$nome = "cinnnnnnnnn";
$idade = 14;
$endereco = "Ribeirão Pires";

echo "$nome $idade $endereco";

//Exercício 2
echo "<br>";
echo "<br>";
echo "<br>";
echo "EXERCÍCIO 2";
echo "<br>";

$numero = 7;
echo $numero;
echo "<br>";

if($numero<0)
    echo "Número NEGATIVO";
elseif($numero>0)
    echo "Número POSITIVO";
else
    echo "Número igual a zero";

//Exercício 3
echo "<br>";
echo "<br>";
echo "<br>";
echo "EXERCÍCIO 3";
echo "<br>";

$num=-2;
echo $num;
echo "<br>";

if($num%2==0)
    echo "Número PAR";
else
    echo "Número IMPAR";

//Exercício 4
echo "<br>";
echo "<br>";
echo "<br>";
echo "EXERCÍCIO 4";
echo "<br>";

$i=0;
switch($i){
    case 0: echo "Selecionou 0";
        break;
    case 1: echo "Selecionou 1";
        break;
    case 2: echo "Selecionou ";
        break;
}
    

//Exercício 5
echo "<br>";
echo "<br>";
echo "<br>";
echo "EXERCÍCIO 5";
echo "<br>";

$contagem=1;
while($contagem<11){
    echo"$contagem";
    echo"<br>";
    $contagem++;
}

//Exercício 6
echo "<br>";
echo "<br>";
echo "<br>";
echo "EXERCÍCIO 6";
echo "<br>";

$contar=1;
for($soma=1;$soma<=50;$soma++){
    echo $contar;
    echo"<br>";
    $contar=$contar+$soma;
}

//Exercício 7
echo "<br>";
echo "<br>";
echo "<br>";
echo "EXERCÍCIO 7";
echo "<br>";

$nomes=array("Angela","Gabbriel","Vitaogameplay","Vcindopulaebota","Iaguinhoratatui");
foreach($nomes as $n){
    echo "$n<br>";
}

//Exercício 8
echo "<br>";
echo "<br>";
echo "<br>";
echo "EXERCÍCIO 8";
echo "<br>";


for($mult=1;$mult<=10;$mult++){
    $conta=5;
    $conta=$conta*$mult;
    echo $conta;
    echo"<br>";
}

?>