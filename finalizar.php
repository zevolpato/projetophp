<?php
    include './backend/conexao.php';
    $idvenda = $_GET['idVenda'];
    $valor = $_POST['valor'];
    $query = "update vendas set valor_total='$valor' where id_venda = '$idvenda'";
    mysqli_query($link, $query);
    header("Location: vendas.php");
?>