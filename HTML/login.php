<?php include_once "head.php"; ?>
<?php include_once "header.php"; ?>
<title>CineMogi - Login</title>


<main>
  <div class="login-e-cadastro divisao--secoes">
      <section class="secao-login">
          <div class="container">
                <div class="img-e-titulo">
                  <img src="../images/entrar.png" alt="Imagem ilustrativa de entrada" class="img-entrar">
                      <h3 class="titulo-pag--login">Seja Bem vindo !</h3>
                </div>
                  <p>Entre em sua conta</p>
                  <form action="../PHP/verifica-login.php" method="post">
                      <div class="form-row">
                      <label for="login">User:</label>
                          <input type="text" name="login" class="input-box input-pagamento" placeholder="Insira o nome de usuario"> 
                      </div>
                      <div class="form-row">
                          <label for="senha">Senha:</label>
                          <input type="password" name="senha" class="input-box input-pagamento" placeholder="Insira sua senha">
                      </div>
                  
                      <button class="btn-sucesso btn-pag--login">Entrar</img></button>
                  </form>
              </div>
      </section>
      
      <div class="vertical-line"></div>

      <section class="secao-cadastro">
      <div class="container">
        <div class="img-e-titulo">
          <img src="../images/img-cadastre-se.png" alt="" class="img-entrar">
            <h3 class="titulo-pag--login">Cadastre-se</h3>
        </div>
        
            <p>Cadastre-se para ficar por dentro de todos os lançamentos e promoções</p>
            <form action="../PHP/cadastro_user.php" method="post">
                <div class="form-row">
                  <label for="nome">Nome de usuário:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome de Usuario" class="input-box input-pagamento">
                </div>
                <div>
                  <label for="senha">Senha:</label>
                  <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="input-box input-pagamento">
                </div>
              <div class="form-row">
                <label for="email">Email:</label>
                <input type="mail" name="email" id="email" placeholder="seuemail@gmail.com" class="input-box input-pagamento">
              </div> 
              
              
              <div>
                <label for="celular">Celular:</label>
                <input type="text" name="celular" id="celular" placeholder="Insira seu número" class="input-box input-pagamento">
              </div>
              <button class="btn-sucesso btn-pag--login" name="adicionar">Cadastrar-se</button>
              
          </form>
        </div>
      </section>
  </div>
    

</main>







<?php include_once "footer.php"; ?>