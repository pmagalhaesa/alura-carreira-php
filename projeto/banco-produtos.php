<?php
function listaProdutos ($conexao){
    $produtos= array();
    $sql = "SELECT * FROM produtos;";
    $retorno = mysqli_query($conexao, $sql);
        
    while ($produto = mysqli_fetch_assoc($retorno)){
        array_push($produtos, $produto);
    }
    return $produtos;
}
function insereProduto ($conexao, $nome, $preco){
    $sql= "INSERT INTO produtos (nome, preco) VALUES ('".$nome."',". $preco.");";
    return mysqli_query($conexao, $sql);
}