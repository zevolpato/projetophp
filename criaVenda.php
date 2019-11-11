<?php
    include './backend/conexao.php';
    // inserir a venda 
    $sqlInsert = "insert into vendas(data_venda, valor_total) values (NOW(), 0)";
    mysqli_query($link,$sqlInsert);
    header("Location: itensvendidos.php");
?>