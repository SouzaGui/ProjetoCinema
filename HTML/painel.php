<?php include_once "head.php"; ?>
<?php include_once "header.php";?>
<title>CineMogi - Painel Administrativo</title>

<main class="main-painel">
    <nav class="menu-lateral--painel">
        <div class="links-painel">
            <a href="cadastro-filme.php" target="secao-iframe">Cadastrar Filme</a>
            <a href="cadastro-produto-painel.php" target="secao-iframe">Cadastrar Produto</a>
            <a href="cadastro-funcionario.php" target="secao-iframe">Cadastrar Funcionário</a>
            <a href="visualizar-filmes.php" target="secao-iframe">Visualizar Filmes</a>
            <a href="estoque.php" target="secao-iframe">Visualizar Produtos em Estoque</a>
            <a href="visualizar-funcionarios.php" target="secao-iframe">Visualizar Funcionários</a>
            <a href="clientes.php" target="secao-iframe">Visualizar Clientes</a>
            <!-- <a href="atualizar-Cliente.php" target="secao-iframe">Atualizar Clientes</a> -->
        </div>
        <section class="secao-iframe container">
            <iframe src="iframe-padrao.php" name="secao-iframe"></iframe>
        </section>
        
    </nav>
</main>
