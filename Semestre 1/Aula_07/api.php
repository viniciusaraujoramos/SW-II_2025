<?php
    //cabeçalho
    header("Content-Type: application/json"); //define o tipo da resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //recupera o arquivo json na mesma pasta
    $arquivo = 'usuarios.json';

    // verifica se o arquivo existe, se nao cria um array vazio
    if(!file_exists($arquivo)){
        file_put_contents($arquivos, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    
    //LER O ARQUIVO JSON
    $usuarios = json_decode(file_get_contents($arquivo), true);

    switch ($metodo) {

        case 'GET':
            // verifica se tem um parametro id
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $usuario_encontrado = null;

                //procura pelo id
                foreach ($usuarios as $usuario) {
                    if($usuario['id'] == $id){
                        $usuario_encontrado = $usuario;
                        break;
                    }
                }

                if ($usuario_encontrado) {
                    echo json_encode($usuario_encontrado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                }
                else {
                    http_response_code(404);
                    echo json_encode(["erro" => "Usuário não encontrado"], JSON_UNESCAPED_UNICODE);
                }
            }
            else{
                //retorna todos os usuarios
                echo json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }
            break;        

        case 'POST':
            $dados = json_decode(file_get_contents('php://input'), true);
            
            if (!isset($dados["nome"]) || !isset($dados["email"])) {
                http_response_code(400);
                echo json_encode(["erro" => "Nome e email são obrigatórios"], JSON_UNESCAPED_UNICODE);
                exit;
            }

            //gera um id unico
            $novo_id = 1;

            if (!empty($usuarios)) {
                $ids = array_column($usuarios, 'id');
                $novo_id = max($ids) + 1;
            }

            $novoUsuario = [
                "id" => $novo_id,
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            //adiciona o novo usuario ao arrya existente
            $usuarios[] = $novoUsuario;

            //salva o arquivo
            file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            //retorna a confirmação
            echo json_encode([
                "mensagem" => "Usuário inserido com sucesso",
                "usuario" => $novoUsuario
            ], JSON_UNESCAPED_UNICODE);            

            break;      

        default:
            http_response_code(405); //metodo n permitido
            echo json_encode(["erro" => "Método não permitido"], JSON_UNESCAPED_UNICODE);
            break;        
    }
?>