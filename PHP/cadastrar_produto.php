<?php
require_once "../HTML/head.php";
require_once "conexao.php";
require_once "Produto.class.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar_produto']) && isset($_POST['produto']) && !empty($_POST['produto'])
    && isset($_POST['marca']) && !empty($_POST['marca']) && isset($_POST['quantidade']) && !empty($_POST['quantidade']) &&
    isset($_POST['validade']) && !empty($_POST['validade']) &&
    isset($_POST['preco']) && !empty($_POST['preco'])
) {
    $conexao = new Conexao();

    $nomeProduto = $_POST['produto'];
    $marca = $_POST['marca'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];
    $preco = $_POST['preco'];

    $produto = new Produto ($nomeProduto, $marca, $quantidade, $validade, $preco);

    $dados = array(
        ':nomeProduto' => $nomeProduto,
        ':marca' => $marca,
        ':quantidade' => $quantidade,
        ':validade' => $validade,
        ':preco' => $preco
    );

    // public function __construct($titulo, $genero, $elenco, $faixaEtaria, $dataLancamento) {
    //         $this->titulo = $titulo;
    //         $this->genero = $genero;
    //         $this->elenco = $elenco;
    //         $this->faixaEtaria = $faixaEtaria;
    //         $this->dataLancamento = $dataLancamento;
    //     }
    $cadastroProduto = $conexao->CadastrarProduto($dados);
    if ($cadastroProduto) {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Cadastro realizado",
                text: "Cadastro realizado com sucesso!"
            });
        </script>';
    } elseif (empty($nomeProduto) || empty($marca) || empty($quantidade) || empty($validade) || empty($preco)) {
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Erro ao realizar cadastro",
                text: "Verifique se preencheu todos os campos corretamente e tente novamente!"
            });
        </script>';
    }
    
    

}

