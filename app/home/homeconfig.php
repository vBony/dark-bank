<?php
session_start();
require "dbconnecthome.php";

    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){

       $sql = "SELECT * FROM darkbank.users WHERE id =".$_SESSION['id']; //Não consegui lembrar em outra forma segura para pegar o id do usuario em outra pagina.
       $sql = $pdo->query($sql);

       if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $dados){}
       }
    }else{
        header("Location: ../index.php");
    }
?>
