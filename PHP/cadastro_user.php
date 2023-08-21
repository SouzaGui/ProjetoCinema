<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CineMogi</title>
    <!-- Referências do SweetAlert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
</head>

<?php
require_once "../HTML/header.php";
require_once "../HTML/head.php";
require_once "conexao.php";
require_once "Cliente.class.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adicionar']) && isset($_POST['nome']) && !empty($_POST['nome'])
    && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['celular']) && !empty($_POST['celular'])
) {
    $conexao = new Conexao();

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $perfil = "cliente"; // Valor padrão é "cliente"

    $usuario = new Usuario ($nome, $senha, $email, $celular, $perfil);

    $dados = array(
        ':nome' => $nome,
        ':senha' => $senha,
        ':email' => $email,
        ':celular' => $celular,
        ':perfil' => $perfil
    );


    $idRegistro = $conexao->CadastrarRegistro($dados);

    if ($idRegistro) {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Cadastro realizado",
                text: "Cadastro realizado com sucesso!"
            }).then(function() {
                window.location.href = "../HTML/login.php";
            });
        </script>';
    } elseif (empty($nome) || empty($senha) || empty($email) || empty($celular)) {
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Erro ao realizar cadastro",
                text: "Verifique se preencheu todos os campos corretamente e tente novamente!"
            });
        </script>';
    }
    
    

}
?>
