<?php require "login/loginconfig.php"; ?>

<!-- Bt Vinicius -->
<DOCTYPE html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Dark Bank - Login</title>
        <link rel="stylesheet" href="frameworks/bootstrap.min.css">
        <script src="frameworks/jquery-3.4.1.min.js"></script>
        <script src="frameworks/bootstrap.min.js"></script>
        <link rel="stylesheet" href="login/login.css">

    </head>

    <body>
        <div id="fundo-externo">
            <div id="fundo-img">
                <div id="background"><img class="img-fluid rounded" src="imgs/bg.jpg" alt="Dark City"></div>
            </div>
        </div>

        <div id="box-login" class="container">
            <div id="login-title" class="text-center">Dark Bank</div>
            <form method="POST">
                <div class="form-group">
                    <label for="input-email">Email:</label>
                    <input class="form-control input-login" type="email" name="inputemail" id="input-email" required="required">
                    <small id="email-help" class="form-text text-muted">Jamais compartilhe seu email ou senha com alguém.</small>
                </div>

                <div class="form-group">
                    <label for="input-email">Senha:</label>
                    <input class="form-control input-login" type="password" name="inputsenha" id="input-senha" required="required">
                </div>

                <input id="btn-submit" type="submit" value="Enviar">
                <a href="register/register.php" id="link-registro">Registrar-se</a>
            </form>

            <div id="footer-promo"><small class="text-muted">Ao se registrar você ganha R$1.000,00!</small></div>
            <div id="footer-cr"><small class="text-muted text-center">DarkBank&#169; Todos os direitos reservados</small></div>
        </div>
    </body>
</html>

