<?php include_once "head.php"; ?>

<main class="main-cadastro--filme container">
            <div class="cadastrar-page">
                <form action="../PHP/cadastrar_produto.php" method="post">
                    <a href="#"><img src="../images/logo-cinema.png" alt="Logo CineMogi" class="logo logo-navbar"></a>
                    <h2>Cadastrar Novo Produto</h2>
                    <p>Adicione um novo produto ao banco de dados !</p>
                    <div class="row">
                                <div class="col">   
                                <label for="produto">Nome do Produto</label>
                                <input type="text" class="input-box" name="produto" placeholder="Produto" id="produto">
                                </div>
                                <div class="col">   
                                <label for="marca">Marca</label>
                                <input type="text" class="input-box" name="marca" placeholder="marca" id="marca">
                                </div>
                                <div class="col">
                                    <label for="quantidade">Quantidade</label>
                                <input type="number" class="input-box" placeholder="quantidade" name="quantidade" id="quantidade">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="validade">Validade</label>
                                <input type="date" class="input-box" id="validade" name="validade" placeholder="Validade do produto">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="preco">Preço</label>
                                <input type="number" class="input-box" id="preco" name="preco" placeholder="preço do produto">
                                </div>
                            </div>
                            <button type="submit" name="cadastrar_produto" class="btn-sucesso">Cadastrar</button>
                        </div>
                </form>
            </div>
        </main>