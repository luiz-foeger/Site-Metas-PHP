<?php

session_start();

$login = $_POST['email'];
$password = md5($_POST['senha']);

if ($login == 'email@login' && $password == '81dc9bdb52d04dc20036dbd8313ed055') {
    $_SESSION["logado"] = 1;
    $_SESSION["email"] = $login;
     header('location: equipes.html'); // echo 'Acesso liberado!';
} else {
    $_SESSION["logado"] = 0;
    header('location: login.html'); // echo 'Email ou senha incorretos!';

}
?>
