<?php
//Conexao ao banco de dados.
$local = "127.0.0.1:3306";
$user = "root";
$passwd = "";
$bd = "projetophp";
$link = mysqli_connect("$local","$user","$passwd","$bd");
if (!$link) {
        echo "Não conectado ao banco"; exit();
    }
// echo "Banco conectado com sucesso";
?>
