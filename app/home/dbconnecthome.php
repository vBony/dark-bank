<?php
    try{
        $pdo = new PDO("mysql:dbname=darkbank;host=localhost", "jackvini2", "Sacramento1@");
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }
?>