<?php 

//CABEÇALHO
    header("Content-type: application/json"); //define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

//    echo "Método da requisição:".$metodo;

//RECUPERA O ARQUIVO JSON NA MESMA PASTA DO PROJETO
$arquivo = 'usuarios.json';

//VERIFICA SE O ARQUIVO EXISTE, SE NAO EXISTIR CRIA UM COM ARRAY VAZIO
if (!file_exists($arquivo)){
    file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

//LÊ O CONTEUDO DO ARQUIVO JSON
$usuarios = json_decode(file_get_contents($arquivo), true);

//CONTEUDO
//$usuarios =[
//    ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
//    ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com"]
//];

switch ($metodo) {
    case 'GET':
        //echo "AQUI AÇÕES DO MÉTODO GET";
        //Converte para JSON e retorna
        echo json_encode($usuarios);
        break;
    case 'POST':
        //echo "AQUI AÇÕES DO MÉTODO POST";
        //LER OS DADOS NO CORPO DA REQUISIÇÃO
        $dados = json_decode(file_get_contents('php://input'),true);
        //print_r($dados);
        $novoUsuario = [
            "id" => $dados["id"],
            "nome" => $dados["nome"],
            "email" => $dados["email"]
        ];

        //Adiociona o novo usuario ao array existente
        array_push($usuarios, $novoUsuario);
        echo json_encode('Usuario inserido com sucesso!');
        print_r($usuarios);

        break; 
    default:
        echo "MÉTODO NÃO ENCONTRADO!";
        break;
}

//Converter para Json e retornar
//    echo json_encode($usuarios);

?>