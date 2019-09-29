<?php
    session_start();
    require "dbconnectregister.php";

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $nome = ucwords(strtolower(addslashes($_POST['nome'])));
        $sobrenome = ucwords(strtolower(addslashes($_POST['sobrenome'])));
        $email = addslashes($_POST['email']);
        $_SESSION['useremail'] = $email;
        $senha = md5(addslashes($_POST['senha']));
        $agencia = rand(1000, 9999);
        $conta = rand(100000, 999999);
        $saldo = 0;

        $sql = "SELECT email FROM darkbank.users WHERE email = :email";
        $sql = $pdo -> prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() == 0){
            $nome = ucwords(strtolower(addslashes($_POST['nome'])));
            $sobrenome = ucwords(strtolower(addslashes($_POST['sobrenome'])));
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));
            $agencia = rand(1000, 9999);
            $conta = rand(100000, 999999);
            $saldo = 0;

            $sql = "INSERT INTO darkbank.users (id, nome, sobrenome, email, senha, agencia, conta, saldo) VALUES (NULL, :nome, :sobrenome, :email, :senha, :agencia, :conta, :saldo)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":sobrenome", $sobrenome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", $senha);
            $sql->bindValue(":agencia", $agencia);
            $sql->bindValue(":conta", $conta);
            $sql->bindValue(":saldo", $saldo);
            $sql->execute();

            header("Location: ../index.php");
        }else{
            header("Location: cu.php");
        }
    }


?>