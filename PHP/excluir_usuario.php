<?php
require_once "../HTML/head.php";

require_once "conexao.php";

$conexao = new Conexao();
 
$excluirUser = $_GET['id_user'];
$conexao->DeletarUsuario($excluirUser);
echo "<script>  Swal.fire(
    'Usuário deletado com sucesso',
    'Usuário excluído do banco de dados.',
    'success'
)</script>";



