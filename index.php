<?php


$paginas = ['Cadastro Produto' => '', 'sobre' => 'Pagina Sobre', 'contato' => ''];


$paginas['contato'] = '<form> <input type = "text" placeholder ="Nome" /> <button onclick ="imbecil()">clique aqui imbecil</button></form>';

$paginas['Cadastro Produto'] = '<br>
<form method="post" action="Banco.dao/verificaCadastro.php">
    <pre>
        Nome      : <input type="text" name="txtprod_nome"><br>
        Descrição : <textarea type="text" name="txtprod_desc"></textarea><br>
        preço     : <input type="text" name="txtprod_preco"><br>
        Quantidade: <input type="text" name="txtprod_qtd"><br>
        
        <input type="submit" value="Cadastrar" name="btn"><br>
    </pre>
</form>';
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