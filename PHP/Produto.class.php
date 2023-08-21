<?php 

class Produto {
    private $nomeProduto;
    private $marca;
    private $quantidade;
    private $validade;
    private $preco;

    public function __construct($nomeProduto, $marca, $quantidade, $validade, $preco) {
        $this->nomeProduto = $nomeProduto;
        $this->marca = $marca;
        $this->quantidade = $quantidade;
        $this->validade = $validade;
        $this->preco = $preco;
    }
}