<?php
require_once "../HTML/head.php";

require_once "conexao.php";

$conexao = new Conexao();
 
$excluirProduto = $_GET['id_produto'];
$conexao->DeletarProduto($excluirProduto);
echo "<script>  Swal.fire(
    'Produto deletado com sucesso',
    'Produto excluído do banco de dados.',
    'success'
)</script>";



