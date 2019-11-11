<?php
    include './backend/conexao.php';
    $idproduto = $_GET['id'];

    echo $idproduto;


    $query = "delete from produtos where id_produto = '$idproduto'";
    mysqli_query($link, $query);
    //header("Location: produtos.php");
    echo "o produto não pode ser deletado pois possui uma chave estrangeira em outra tabela";

?>