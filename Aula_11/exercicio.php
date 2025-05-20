<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta de CEP</title>
</head>
<body>

    <h2>Buscar Endereço pelo CEP</h2>
    <form method="get" action="">
        <label for="cep">CEP (8 dígitos):</label>
        <input type="text" name="cep" id="cep" maxlength="8" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    if (isset($_GET['cep'])) {
        $cep = preg_replace('/\D/', '', $_GET['cep']);

        if (strlen($cep) !== 8) {
            echo "<p>CEP inválido. Insira exatamente 8 dígitos numéricos.</p>";
            exit;
        }

        $url = "https://viacep.com.br/ws/{$cep}/json/";
        $resposta = file_get_contents($url);

        if ($resposta === false) {
            echo "<p>Erro ao consultar a API ViaCEP.</p>";
            exit;
        }

        $dados = json_decode($resposta, true);

        if (isset($dados['erro']) && $dados['erro'] === true) {
            echo "<p>CEP não encontrado.</p>";
            exit;
        }

        echo "<h3>Resultado:</h3>";
        echo "Logradouro: " . $dados['logradouro'] . "<br>";
        echo "Bairro: " . $dados['bairro'] . "<br>";
        echo "Localidade: " . $dados['localidade'] . "<br>";
        echo "UF: " . $dados['uf'] . "<br>";
    }
    ?>

</body>
</html>