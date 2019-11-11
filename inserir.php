<?php
include './backend/conexao.php';
$pod = $_POST['produto'];
$val = $_POST['valor'];
$sql = "insert into produtos(nome, valor) values ('$pod','$val')";
mysqli_query($link,$sql);
header('Location: produtos.php');
?>