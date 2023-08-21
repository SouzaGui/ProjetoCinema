<?php
require_once "../HTML/head.php";
require_once "conexao.php";
require_once "Funcionario.class.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar_funcionario']) && isset($_POST['nome']) && !empty($_POST['nome'])
    && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['cpf']) && !empty($_POST['cpf']) &&
    isset($_POST['cargo']) && !empty($_POST['cargo'])
) {
    $conexao = new Conexao();

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];

    $funcionario = new Funcionario ($nome, $senha, $email, $cpf, $cargo);

    $dados = array(
        ':nome' => $nome,
        ':senha' => $senha,
        ':email' => $email,
        ':cpf' => $cpf,
        ':cargo' => $cargo
    );

    // public function __construct($titulo, $genero, $elenco, $faixaEtaria, $dataLancamento) {
    //         $this->titulo = $titulo;
    //         $this->genero = $genero;
    //         $this->elenco = $elenco;
    //         $this->faixaEtaria = $faixaEtaria;
    //         $this->dataLancamento = $dataLancamento;
    //     }
    $cadastroFuncionario = $conexao->CadastrarFuncionario($dados);
    if ($cadastroFuncionario) {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Cadastro realizado",
                text: "Cadastro realizado com sucesso!"
            });
        </script>';
    } elseif (empty($nome) || empty($senha) || empty($email) || empty($cpf) || empty($cargo)) {
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Erro ao realizar cadastro",
                text: "Verifique se preencheu todos os campos corretamente e tente novamente!"
            });
        </script>';
    }
    
    

}