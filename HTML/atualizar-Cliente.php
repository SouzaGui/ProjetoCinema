<?php
include_once "head.php";
include_once "header.php";
require_once "../PHP/conexao.php";

$conexao = new Conexao();

$sql = "SELECT * FROM cadastro_user";

$stmt = $conexao->executarQuery($sql);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();

if ($count > 0) {
    $row = $resultado[0]; // Apenas a primeira linha para simplificar o exemplo
?>

<section class="secao-cadastro">
    <div class="container">
        <div class="img-e-titulo">
            <h3 class="titulo-pag--login">Atualizar cadastro</h3>
        </div>
        <form action="../PHP/atualizar_user.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id_user']; ?>">
            <div class="form-row">
                <label for="nome">Nome de usuário:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome_user']; ?>" placeholder="Nome de Usuario" class="input-box">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" value="<?php echo $row['senha_user']; ?>" id="senha" placeholder="Digite sua senha" class="input-box">
            </div>
            <div class="form-row">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row['email_user']; ?>" id="email" placeholder="seuemail@gmail.com" class="input-box">
            </div> 
            <div>
                <label for="celular">Celular:</label>
                <input type="text" name="celular" value="<?php echo $row['celular_user']; ?>" id="celular" placeholder="Insira seu número" class="input-box">
            </div>
            <button class="btn-sucesso btn-pag--login" name="atualizar">Atualizar</button>
        </form>
    </div>
</section>

<?php
}
?>

