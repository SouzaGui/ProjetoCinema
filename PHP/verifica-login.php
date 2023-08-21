<?php
require_once "../HTML/head.php";
require_once "conexao.php";

session_start();

$conexao = new Conexao();

$login = $_POST['login'];
$senha = $_POST['senha'];

$consulta = $conexao->prepare("SELECT profile_user FROM cadastro_user WHERE nome_user = :nome");
$consulta->bindParam(':nome', $login);
$consulta->execute();

$resultado = $consulta->fetch(PDO::FETCH_ASSOC);

if (!$resultado) {
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Não foi possível acessar sua conta',
        text: 'Verifique se digitou corretamente os campos de login e senha e tente novamente!'
    }).then(function() {
        window.location.href = '../HTML/login.php';
    });
    </script>";
    die();
} else {
    $_SESSION['logged_in'] = true;
    $_SESSION['nome_user'] = $login;
    $_SESSION['profile_user'] = $resultado['profile_user'];

    if ($_SESSION['logged_in'] && $_SESSION['profile_user'] == 'admin') {
        header("Location: ../HTML/painel.php");
        exit();
    } else {
        header("Location: ../HTML/index.php");
        exit();
    }
}

