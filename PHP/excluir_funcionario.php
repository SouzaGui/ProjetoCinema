<?php 
require_once "../HTML/head.php";

require_once "conexao.php";

$conexao = new Conexao();
 

$excluirFuncionario = $_GET['id_funcionario'];

$conexao->DeletarFuncionario($excluirFuncionario);
echo "<script>  Swal.fire(
    'Cadastro de funcionário(a) deletado com sucesso',
    'Cadastro de funcionário(a) excluído do banco de dados.',
    'success'
)</script>";