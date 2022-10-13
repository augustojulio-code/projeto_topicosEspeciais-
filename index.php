<?php

$id = 'id_produtos';
$nome = 'nome_produto';
$desc = 'desc_produto';
$preco = 'preco_produto';
$qtd = 'qtd_produto';

$paginas = ['Cadastro Produto' => '', 'Produtos' => 'Pagina Sobre', 'contato' => ''];

$paginas['Produtos'] = '
<?php
    include ("../Banco/conexao.php");
    include ("../Banco.dao/banco-produto.php");
?>
<style>
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<div class="container">
    <h1>Produtos Cadastrados</h1>
    <table border="1">

        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Preço</td>
            <td>QUantidade</td>
        </tr>

        <?php
  $produtos = ListaProdutos($conexao);
  foreach ($produtos as $produto):
  ?>

        <tr>

            <td><?php echo $produto[$id]?></td>
            <td><?php echo $produto[$nome]?></td>
            <td><?php echo $produto[$desc]?></td>
            <td><?php echo $produto[$preco]?></td>
            <td><?php echo $produto[$qtd]?></td>
            <td><a href="Excluir-Produto.php?tb_produto_id=
        <?php echo $produto[$id]?>">
                    Excluir</a></td>

            <td><a href="Alterar-Produto.php?tb_produto_id=
            <?php echo $produto[$id]?>">
                    Alterar</a></td>


        </tr>

        <?php
endforeach;
?>
    </table>
</div>';

$paginas['contato'] = '<form> <input type="text" placeholder="Nome" /> <button onclick="imbecil()">clique aqui
        imbecil</button></form>';

$paginas['Cadastro Produto'] = '<br>
<style>
* {
    box-sizing: border-box;
}

input[type=text],
select,
textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {

    .col-25,
    .col-75,
    input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
<div class="container">
    <form method="post" action="Banco.dao/verificaCadastro.php">
        <div class="row">
            <div class="col-25">
                <label for="fname">Produto</label>
            </div>
            <div class="col-75">
                <input type="text" name="txtprod_nome" placeholder="Produto">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Descrição</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="txtprod_desc" placeholder="Descrição">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="country">Preço</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="txtprod_preco" placeholder="Preço">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Quantidade</label>
            </div>
            <div class="col-75">
                <input type="text" id="subject" name="txtprod_qtd" placeholder="Quantidade">
                </intput>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>';
?>

<!DOCTYPE html>
<html>
<script>
function imbecil() {


    alert('Ola imbecil');
}
</script>

<head>
    <title>Projeto topicos especiais</title>
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        background-color: #069;
        padding: 8px 10px;
        text-align: center;
    }

    a {
        display: inline-block;
        margin: 0 10px;
        color: white;
        font-size: 17px;
    }

    section {

        max-width: 960px;
        margin: 20px auto;
        padding: 0 2%;
    }

    h2 {
        background-color: #069;
        color: white;
        padding: 8px 10px;

    }
    </style>
</head>

<body>

    <header>
        <?php
        foreach ($paginas as $key => $value) {
            echo '<a href ="?page=' . $key . '">' . ucfirst($key) . '</a>';
        }
        ?>
    </header>
    <section>
        <h2>
            <?php
            $pagina = (isset($_GET['page']) ? $_GET['page'] : 'Cadastro Produto');

            if (!array_key_exists($pagina, $paginas)) {

                $pagina = 'Cadastro Produto';
            }
            echo ucfirst($pagina);

            ?>
        </h2>
        <p> <?php echo $paginas[$pagina] ?></p>
    </section>

</body>

</html>