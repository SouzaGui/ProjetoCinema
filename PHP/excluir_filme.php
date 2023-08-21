<?php
require_once "../HTML/head.php";

require_once "conexao.php";

$conexao = new Conexao();
 
$excluirFilme = $_GET['id_filme'];
$conexao->DeletarFilme($excluirFilme);
echo "<script>  Swal.fire(
    'Filme deletado com sucesso',
    'Filme excluído do banco de dados.',
    'success'
)</script>";



$excluirFuncionario = $_GET['id_filme'];

$conexao->DeletarFuncionario($excluirFuncionario);
echo "<script>  Swal.fire(
    'Filme deletado com sucesso',
    'Filme excluído do banco de dados.',
    'success'
)</script>";