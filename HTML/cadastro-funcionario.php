<?php include_once "head.php"; ?>


<main class="main-cadastro--funcionario container">
            <div class="cadastrar-page--funcionario">
                <form action="../PHP/cadastrar_funcionario.php" method="post">
                    <a href="#"><img src="../images/logo-cinema.png" alt="Logo CineMogi" class="logo logo-navbar"></a>
                    <h2>Cadastrar Novo Funcionário</h2>
                    <p>Adicione um novo funcionário ao banco de dados !</p>
                    <div class="row">
                                <div class="form-row">   
                                <label for="nome">Nome completo</label>
                                <input type="text" class="input-box" name="nome" placeholder="Nome" id="nome">
                                </div>
                                <div class="form-row">
                                    <label for="senha">Senha:</label>
                                <input type="password" class="input-box" placeholder="Informe uma senha" name="senha" id="senha">
                                </div>
                                <div class="form-row">   
                                <label for="email">Email:</label>
                                <input type="email" class="input-box" name="email" placeholder="email" id="email">
                                </div>
                                <div class="form-row">
                                    <label for="cpf">CPF:</label>
                                <input type="text" class="input-box" placeholder="digite o CPF" name="cpf" id="cpf">
                                </div>
                                <div class="form-row">
                                    <label for="Cargo">Cargo:</label>
                                <input type="text" class="input-box" placeholder="Informe o Cargo" name="cargo" id="cargo">
                                </div>
                            </div>
                            
                            <button type="submit" name="cadastrar_funcionario" class="btn-sucesso">Cadastrar</button>
                        </div>
                </form>
            </div>
        </main>