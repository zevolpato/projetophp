<?php
    include './backend/conexao.php';
    $idproduto = $_GET['id'];
    $nome = $_POST['produto'];
    $valor = $_POST['valor'];
    $query = "update produtos set nome ='$nome', valor='$valor' where id_produto = '$idproduto'";
    mysqli_query($link, $query);
    header("Location: produtos.php");
?>