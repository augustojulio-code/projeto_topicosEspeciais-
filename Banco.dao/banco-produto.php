<?php
function inserir($conexao, $prod_nome, $prod_desc, $prod_preco, $prod_qtd)
{
    $sql = "insert into tb_produto
            (tb_produtos_nome, tb_produto_desc,tb_produto_preco, tb_produto_qtd)
            values('$prod_nome','$prod_desc', '$prod_preco','$prod_qtd')";

    return mysqli_query($conexao, $sql);
}