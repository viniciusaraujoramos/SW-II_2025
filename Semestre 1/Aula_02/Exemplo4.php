<?php

$contador = 0;
while ($contador < 5){
    echo "Número: $contador <br>";
    $contador++;
}

echo "<br>";

for ($i = 0; $i < 5; $i++) {
    echo "Número: $i <br>";
}

echo "<br>";

$nomes = ["Ana", "Bruno", "Carlos"];
foreach ($nomes as $nome) {
    echo "Nome: $nome <br>";
}

?>