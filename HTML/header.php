<?php
session_start();

$nomeUsuario = isset($_SESSION['nome_user']) ? $_SESSION['nome_user'] : null;
$profileUser = isset($_SESSION['profile_user']) ? $_SESSION['profile_user'] : null;

include_once "head.php";
require_once "../PHP/conexao.php";
?>

<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../HTML/index.php"><img src="../images/logo-cinema.png" alt="Logo CineMogi" class="logo logo-navbar"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-links" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="links-navbar" href="#">Home<span class="sr-only">(página atual)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="links-navbar" href="../HTML/index.php#EmCartaz">Em cartaz</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="links-navbar" href="#">Em breve</a>
                    </li> -->
                </ul>
</div>
    <!-- Restante do código do header -->
        <?php
        if ($nomeUsuario && $profileUser) {
            if ($profileUser === "admin") {
                echo '<div class="login"><p class="text-welcome">Olá, ' . $nomeUsuario . '!</p></div>';
                echo '<a href="../HTML/painel.php">Painel</a>';
                echo '<div class="pesquisar-container form-inline my-2 my-lg-0 barra-pesquisa">
                <input class="form-control mr-sm-2 input-pesquisar" type="text" placeholder="Procurar filme" id="movie-name" aria-label="Pesquisar">
                <button class="btn-sucesso my-2 my-sm-0" id="pesquisar-btn">Pesquisar</button>
            </div>
        
            <div class="container-buscar--filme" id="container-buscar--filme">
            
        
                <div id="resultado"></div>
                <span id="fecharFormulario">&times;</span>
            </div>';
            echo '<button type="button" id="mensagem"><img src="../images/logout.png" alt="logout" class="logout" width="22px"></button>';
            } elseif ($profileUser === "cliente") {
                echo '<div class="login"><p class="text-welcome">Olá, ' . $nomeUsuario . '!</p></div>';
                echo '<div class="pesquisar-container form-inline my-2 my-lg-0 barra-pesquisa">
                <input class="form-control mr-sm-2 input-pesquisar" type="text" placeholder="Procurar filme" id="movie-name" aria-label="Pesquisar">
                <button class="btn-sucesso my-2 my-sm-0" id="pesquisar-btn">Pesquisar</button>
            </div>
        
            <div class="container-buscar--filme" id="container-buscar--filme">
            
        
                <div id="resultado"></div>
                <span id="fecharFormulario">&times;</span>
            </div>';
            echo '<button type="button" id="mensagem"><img src="../images/logout.png" alt="logout" class="logout" width="22px"></button>';
            }
        } else {

            echo '<div class="login-sem--logar"><a href="../HTML/login.php">Entrar</a></div>';
            echo '<div class="pesquisar-container form-inline my-2 my-lg-0 barra-pesquisa">
            <input class="form-control mr-sm-2 input-pesquisar" type="text" placeholder="Procurar filme" id="movie-name" aria-label="Pesquisar">
            <button class="btn-sucesso my-2 my-sm-0" id="pesquisar-btn">Pesquisar</button>
        </div>
    
        <div class="container-buscar--filme" id="container-buscar--filme">
        
    
            <div id="resultado"></div>
            <span id="fecharFormulario">&times;</span>
        </div>';
        }
        ?>
    </div>
    <!-- Restante do código do header -->
</header>


<script>
  document.getElementById('mensagem').onclick = function() {
    Swal.fire({
      title: 'Têm certeza que deseja sair ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sim, sair'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../php/logout.php';
      }else{
        window.location.href = '../HTML/index.php';
      }
    });
  };
</script>
