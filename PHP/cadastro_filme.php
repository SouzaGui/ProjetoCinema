<?php
require_once "../HTML/head.php";
require_once "conexao.php";
require_once "Filme.class.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adicionar_filme']) && isset($_POST['titulo']) && !empty($_POST['titulo'])
    && isset($_POST['genero']) && !empty($_POST['genero']) && isset($_POST['elenco']) && !empty($_POST['elenco']) &&
    isset($_POST['faixaEtaria']) && !empty($_POST['faixaEtaria']) &&
    isset($_POST['dataLancamento']) && !empty($_POST['dataLancamento'])
) {
    $conexao = new Conexao();

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $elenco = $_POST['elenco'];
    $faixaEtaria = $_POST['faixaEtaria'];
    $dataLancamento = $_POST['dataLancamento'];

    $filme = new Filme ($titulo, $genero, $elenco, $faixaEtaria, $dataLancamento);

    $dados = array(
        ':titulo' => $titulo,
        ':genero' => $genero,
        ':elenco' => $elenco,
        ':faixaEtaria' => $faixaEtaria,
        ':dataLancamento' => $dataLancamento
    );

    // public function __construct($titulo, $genero, $elenco, $faixaEtaria, $dataLancamento) {
    //         $this->titulo = $titulo;
    //         $this->genero = $genero;
    //         $this->elenco = $elenco;
    //         $this->faixaEtaria = $faixaEtaria;
    //         $this->dataLancamento = $dataLancamento;
    //     }
    $cadastroFilme = $conexao->CadastrarFilme($dados);
    if ($cadastroFilme) {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Cadastro realizado",
                text: "Cadastro realizado com sucesso!"
            });
        </script>';
    } elseif (empty($titulo) || empty($genero) || empty($elenco) || empty($faixaEtaria) || empty($dataLancamento)) {
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
