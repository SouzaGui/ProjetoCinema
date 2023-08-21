<?php
require_once "../html/head.php";

require_once "conexao.php";

$conexao = new Conexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['atualizar']) && isset($_POST['nome']) && !empty($_POST['nome'])
    && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['email']) && !empty($_POST['email']) 
    && isset($_POST['celular']) && !empty($_POST['celular'])
) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $id = $_POST['id'];

    $dados = array(':nome' => $nome, ':senha' => $senha, ':email' => $email, ':celular' => $celular);
    
    // Chamar a função Registro
    if ($conexao->EditarRegistro($id, $dados)) {
        echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Sucesso!",
                    text: "Cadastro atualizado com sucesso"
                }).then((result) => {
                    // Redirecionar ou realizar outras ações após o sucesso
                    window.location.href = "../HTML/atualizar-Cliente.php";
                });
            </script>';
        exit();
    } else {
        echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Erro!",
                    text: "Ocorreu um erro ao editar o registro"
                }).then((result) => {
                    window.location.href = "../HTML/atualizar-Cliente.php";
                });
            </script>';
    }
} else {
    echo "ID do usuário não especificado.";
}



