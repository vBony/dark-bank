<?php
session_start();
    try{
        $pdo = new PDO("mysql:dbname=darkbank;host=localhost", "jackvini2", "Sacramento1@");
        
        if(isset($_POST['inputemail']) && !empty($_POST['inputemail'])){
            $email = addslashes($_POST['inputemail']);
            $senha = md5(addslashes($_POST['inputsenha']));

            $sql = "SELECT * FROM users WHERE email = :email AND senha = :senha";
            
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();

            if($sql->rowCount() == 1){
               $dados = $sql->fetch();
               $_SESSION['id'] = $dados['id'];
               header("Location: home/home.php");
            }else{
                header("Location: index.php");
            }
        }

    }catch(PDOException $e){
        echo "Erro ao se conectar: ".$e->getMessage();
    }

?>