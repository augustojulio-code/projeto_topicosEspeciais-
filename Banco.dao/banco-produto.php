<?php
function inserir($conexao, $prod_nome, $prod_desc, $prod_preco, $prod_qtd)
{
    $sql = "insert into tb_produtos
            (nome_produto, desc_produto,preco_produto, qtd_produto)
            values('$prod_nome','$prod_desc', '$prod_preco','$prod_qtd')";

    return mysqli_query($conexao, $sql);
}

function ListaProdutos($conexao)
{
    $produtos = array();

    $result = mysqli_query($conexao, "select*from tb_produto");

    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function busca($conexao, $prod_id)
{
    $result = mysqli_query($conexao, "select*from tb_produto where tb_produto_id = $prod_id");

    return mysqli_fetch_assoc($result);
}