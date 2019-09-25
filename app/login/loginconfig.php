<?php
    try{
        $pdo = new PDO("mysql:dbname=darkbank;host=localhost", "jackvini2", "Sacramento1@");
        
        if(isset($_POST['inputemail']) && !empty($_POST['inputemail'])){
            $email = addslashes($_POST['inputemail']);
            $senha = addslashes($_POST['inputsenha']);

            $sql = "SELECT nome, sobrenome, email, senha, id FROM users WHERE email = :email AND senha = :senha";
            
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();

            if($sql->rowCount() > 0){
               $dados = $sql->fetch();
               $_SESSION['id'] = $dados['id'];
               header("Location: ../home/index.php?id=".$dados['id']);
            }else{
                header("Location: loginview.php");
            }

        }

    }catch(PDOException $e){
        echo "Erro ao se conectar: ".$e->getMessage();
    }

?>