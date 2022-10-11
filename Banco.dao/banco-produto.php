<?php
function inserir($conexao, $prod_nome, $prod_desc, $prod_preco, $prod_qtd)
{
    $sql = "insert into tb_produtos
            (nome_produto, desc_produto,preco_produto, qtd_produto)
            values('$prod_nome','$prod_desc', '$prod_preco','$prod_qtd')";

    return mysqli_query($conexao, $sql);
}