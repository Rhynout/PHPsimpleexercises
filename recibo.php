<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
    <div class="jumbotron">
<link href="impressao.css" media="print" rel="stylesheet"> 

<body>

<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$credor = $_POST['credor'];
$valor = $_POST['valor'];

echo "<h1>RECIBO</h1>";
echo "<p class=\"texto\">Eu <b>$nome</b>, $idade anos, portador do CPF: <b>$cpf</b> RG: <b>$rg</b>, declaro que recebi de <b> $credor</b> o valor de <b> R$ $valor</b>.
Não tendo nada para contestar declaro encerrada a divida nesta data.<br><br>";

echo "Leme " .date("d")." do ".date("m")." de ".date("Y"). "<br><br>";
echo "_________________________________________________<br> Assinatura</p>";

?>

<div class="invisivel">
<input type="button" class="btn btn-success" value="Imprimir Recibo" onClick="javascript:window.print()">
</div>
