<?php

include 'php/site.config.php';

$msgErro = @$GET["error"]

//echo $msg;
if ($msg != "") {
    $msg = '<div class="alert">
    <span class="iconify" data-icon="mdi-alert" data-inline="false"></span>
    <p><strong>Atenção:</strong> A seguinte mensagem de erro foi informada: '.$msg.'</p>
  </div>';
}

criaHeader('Entrar');

echo $msg;
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.login.css">
    <title>Login - MetasTSI</title>
</head>

<body>
    <header>
        <ul class="links-header">
            <li><a href="index.html">PÁGINA INICIAL</a></li>
            <li><a href="equipes.html">MEUS ESPAÇOS</a></li>
            <li><a href="#">SAIBA MAIS</a></li>
            <li><a href="login.html">ENTRAR</a></li>
        </ul>

        <div class="logo links-header">
            <img src="../img/logo.png" alt="logotipo MetasTSI" width="80" height="80">
        </div>
    </header>
    <main>
        <form action="sis.entrar.php" method="POST">
            <div class="container-login">
                <div>
                    <div class="cadastrar-text">
                        Entrar no MetasTSI
                    </div>
                    <div class="input">
                        <p>E-mail ou nome de usuário</p>
                        <p><input type="text" name="email" placeholder="E-mail" class="input-login"></p>
                    </div>
                    <div class="input">
                        <p>Senha</p>
                        <p><input type="password" name="senha" placeholder="Senha" class="input-login"></p>
                    </div>
                    <div>
                        <a href="#">Esqueci minha senha</a>
                    </div>
                    <div class="bt-entrar">
                        <input type="submit" value="ENTRAR" class="entrar-bt">
                    </div>
                </div>
            </div>
<?php
    if($msgErro != ""){
        echo '<div style="color:erro">'.$msgErro.'</div>';
    }
?>

        </form>
    </main>
    <footer>
        <p>© All rights reserved | Turma TSI 2023</p>
    </footer>
</body>

</html>