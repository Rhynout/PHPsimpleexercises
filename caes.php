<?php​​

require_once "funcoes.php";
cabecalho("Idade do cão");

?>

<h1> Cálculo da idade do cão </h2>

<form action="calculaidade.php" method="post">

<p><label>Escolha o tamanho do cão:</label>
    <select name="tamanho" class="form-control">

<option value="pequeno">Pequeno</option>
<option value="medio">Médio</option>
<option value="grande">Grande</option>

</select><p>

<label>Nome:</label>

<input name="nome" type="text" size="10" maxlenght="20" class="form-control">

<p><label>Idade:</label>

<input name="idade" type="text" size="10" maxlenght="10" class="form-control">
</p>

<p><input type="submit" class="btn btn-primary" value="Redefinir"></p>
</form>

<?php

require_once "funcoes.php";
rodape();

?>