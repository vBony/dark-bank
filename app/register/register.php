<?php 
require "registerconfig.php";
require "dbconnectregister.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registro - Dark Bank</title>
        <link rel="stylesheet" href="../frameworks/bootstrap.min.css">
        <script src="../frameworks/jquery-3.4.1.min.js"></script>
        <script src="../frameworks/bootstrap.min.js"></script>
        <link rel="stylesheet" href="register.css">
        <script src="script.js"></script>
    </head>

    <body>
        <div id="fundo-img">
            <img src="../imgs/bg.jpg" alt="">
        </div>

        <div id="box-register" class="container">
            <div id="register-title" class="text-center">Registro </div>

            <form method="post" onsubmit="return validaForm(this);">
                <div class="container row d-flex justify-content-center " id=content>
                    <div class="form-group" id="box1">
                        <input type="text" name="nome" id="input-nome" class="input-register" placeholder="Nome" autofocus required>
                        <input type="text" name="sobrenome" id="input-sobrenome" class="input-register" placeholder="Sobrenome" required>
                    </div>

                    <div class="form-group" id="box2">
                        <input type="email" name="email" id="input-email" class=input-register placeholder="Email" required>
                    </div>

                    <div class="form-group" id="box3">
                        <input type="password" name="senha" id="input-senha" placeholder="Digite a senha" class="input-register" required>
                        <input type="password" name="confirmasenha" id="input-confimasenha" placeholder="Digite novamente a senha" class="input-register" required>
                    </div>

                    <input type="submit" value="Enviar" id="botao-form">
                </div>

            </form>
        </div>
    </body>
</html>