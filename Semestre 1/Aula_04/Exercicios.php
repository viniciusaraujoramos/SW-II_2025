<!-- Desafio Extra
Modifique o Exercício 5 para exibir o nome do aluno com a maior nota. Use um laço
de repetição para encontrar essa informação -->
<?php
    /* <!-- Desafio Extra
    Modifique o Exercício 5 para exibir o nome do aluno com a maior nota. Use um laço
    de repetição para encontrar essa informação --> */

    $boletim = array("Vinicius" => "8", "Pedro" => "10", "Mateus" => "9", "Davi" => "7");

    foreach ($boletim as $key => $value) {
        sort($value);
        $maior = $value[count($boletim) - 1];
    }

    echo "O maior é " . $maior;

    /* <!-- Exercício 1
    a) Crie um array associativo chamado $pessoa com as seguintes chaves: nome,
    idade, cidade.
    b) Adicione uma nova chave chamada profissao ao array.
    c) Crie um array indexado chamado $amigos com os nomes de três amigos.
    d) Combine os arrays $pessoa e $amigos em um novo array chamado $dados.
    e) Exiba o conteúdo do array $dados usando print_r. --> */

    $pessoa = array("nome" => "Vinicius", "idade" => "17", "cidade" => "Riveirao Pires");

    $pessoa["profissao"] = "Estudando";

    $amigos = ["Pedro", "Mateus", "Davi"];

    $dados = array_merge($pessoa, $amigos);
    print_r($dados);

    /* <!-- Exercício 2
    Crie um array com 10 números inteiros. Use um laço de repetição para calcular a
    soma de todos os elementos do array e exiba o resultado. --> */

    function soma($n) {
        $soma = 0;

        foreach ($n as $numero) {
            $soma += $numero;
        }

        return $soma;
    }

    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    echo "A soma dos 10 números é " . soma($num);

    /* <!-- Exercício 3
    Crie um array com 8 números inteiros. Use um laço de repetição para encontrar o
    maior e o menor valor no array e exiba ambos. --> */

    $numeros = [1, 4, 2, 10, 5, 3, 9, 7];
    sort($numeros);

    echo "O maior número é o " . $numeros[count($numeros) - 1];
    echo "<br>";
    echo "O menor número é o " . $numeros[0];

    /* <!-- Exercício 4
    Crie um array com 15 números inteiros. Use um laço de repetição para contar
    quantos números são pares e quantos são ímpares. Exiba os resultados. --> */

    $n = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

    $quantidapar = 0;
    $quantidaimpar = 0;

    for($i = $n[0]; $i < 16; $i ++){
        if($i % 2 == 0){
            $quantidapar += 1;
        }
        else {
            $quantidaimpar += 1;
        }
    }

    echo "A quantidade de números pares é de " . $quantidapar;
    echo "<br>";
    echo "A quantidade de números impares é de " . $quantidaimpar;

    /* <!-- Exercício 5
    Crie um array associativo onde cada chave é o nome de um aluno e o valor é a sua
    nota.Use um laço de repetição para calcular a média das notas e exiba o resultado. 
    Dicas para Resolução:
    • Use for ou foreach para percorrer os arrays.
    • Utilize funções como count() para determinar o tamanho do array.
    • Para arrays associativos, lembre-se de acessar as chaves e valores corretamente--> */

    $boletim = array("Rapha" => "8", "Vitoria" => "10", "Ana" => "9", "Matheus" => "7");

    $soma = 0;

    foreach ($boletim as $key => $value) {
        $soma += $value;
    }

    $media = $soma / count($boletim);

    echo "A média é " . $media;

?>
