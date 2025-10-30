<?php​

require_once "funcoes.php";​

cabecalho("Idade do cão calculada");​

$tamanho = $_POST['tamanho'];​
$idade = $_POST['idade'];​
$nome = $_POST['nome'];​

verificacampotexto("Tamanho", $tamanho);​
verificacampo("Idade", $idade);​
verificacampotexto("nome", $nome);​
​
$idadecao = calculaidade($tamanho, $idade);​

echo "<h1>A idade do $nome e: $idadecao</h1>";​

rodape();

?>