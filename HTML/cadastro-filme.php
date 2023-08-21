<?php include_once "head.php"; ?>

<main class="main-cadastro--filme container">
            <div class="cadastrar-page">
                <form action="../PHP/cadastro_filme.php" method="post">
                    <a href="#"><img src="../images/logo-cinema.png" alt="Logo CineMogi" class="logo logo-navbar"></a>
                    <h2>Cadastrar Novo Filme</h2>
                    <p>Adicione um novo filme ao banco de dados !</p>
                    <div class="row">
                                <div class="col">   
                                <label for="titulo">titulo do filme</label>
                                <input type="text" class="input-box" name="titulo" placeholder="Nome" id="nome">
                                </div>
                                <div class="col">
                                    <label for="genero">Gênero</label>
                                <input type="text" class="input-box" placeholder="genero" name="genero" id="genero">
                                </div>
                            </div>
                            <div class="form-row">
                                    <label for="elenco">Elenco</label>
                                <input type="text" class="input-box" placeholder="elenco" name="elenco" id="elenco">
                                </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="faixaEtaria">Faixa etária</label>
                                <input type="number" class="input-box" id="faixaEtaria" name="faixaEtaria" placeholder="Classificação indicada">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="dataLancamento">Data de Lançamento</label>
                                <input type="date" class="input-box" id="dataLancamento" name="dataLancamento" placeholder="Data de Lançamento">
                                </div>
                            </div>

                            <button type="submit" name="adicionar_filme" class="btn-sucesso">Cadastrar</button>
                        </div>
                </form>
            </div>
        </main>