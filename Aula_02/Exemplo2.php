<?php

$idade = 17;
$falta = 18-$idade;
echo "Sua idade é $idade, ou seja,  <br>";
if ($idade >= 18) {
    echo "Você é maior de idade";
}

else{
    
    echo "Você é menor de idade <br> ";
    echo "Faltam $falta anos";
}

?>