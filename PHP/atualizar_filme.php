<?php

require_once "conexao.php";

$conexao = new Conexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se os campos foram preenchidos
    if (isset($_POST['nome'], $_POST['senha'], $_POST['acesso'], $_POST['id'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $acesso = $_POST['acesso'];
        $idRegistroEditar = $_POST['id'];
        
        $dadosEditar = array(':nome' => $nome, ':senha' => $senha, ':acesso' => $acesso);
        
        // Chamar a função EditarRegistro
        if ($conexao->EditarRegistro($idRegistroEditar, $dadosEditar)) {
            // Redirecionar em caso de sucesso
            header('Location: painel.php');
            exit(); // Terminar o script após o redirecionamento
        } else {
            // Tratar o caso de falha na edição do registro
            echo "Ocorreu um erro ao editar o registro.";
            // Você pode adicionar mais informações ou ações adequadas aqui
        }
    } else {
        // Tratar o caso de campos ausentes
        echo "Todos os campos devem ser preenchidos.";
        // Você pode adicionar mais informações ou ações adequadas aqui
    }
} else {
    // Tratar o caso de método de requisição incorreto
    echo "Método de requisição inválido.";
    // Você pode adicionar mais informações ou ações adequadas aqui
} ?>
