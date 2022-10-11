<?php
include("../Banco/conexao.php");
include("../Banco.dao/banco-produto.php");

$nome = ($_POST['txtprod_nome']);
$desc = ($_POST['txtprod_desc']);
$preco = ($_POST['txtprod_preco']);
$qtd = ($_POST['txtprod_qtd']);

if (inserir($conexao, $nome, $desc, $preco, $qtd)) {

    header("location: ../index.php");
} else {
    $msg = mysqli_errno($conexao);
    echo "$msg";
}
?>
<!DOCTYPE html>
<html>
<Script>
function teste() {

    alert("deu certo");
}
</Script>

</html>