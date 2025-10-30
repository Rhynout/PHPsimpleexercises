<?php

require_once "funcoes.php";
cabecalho("Área parede");
?>
<h1>Calcular Tijolos</h1>

<form method="post" action="qt.php" class="form-inline">
    <p>
        Tipo de tijolo:
        <input type="text" name="tipo" size="10" maxlenght="10" class="form-control">
        <p>
        Altura do tijolo:
        <input type="text" name="atijolo" size="10" maxlenght="10" class="form-control">
        <p>
        Largura do tijolo:
        <input type="text" name="ltijolo" size="10" maxlenght="10" class="form-control">
        <p>
        Altura da parede:
        <input type="text" name="aparede" size="10" maxlenght="10" class="form-control">
        <p>
        Largura da parede:
        <input type="text" name="lparede" size="10" maxlenght="10" class="form-control">
        <p>

        <input type="submit" value="Calcular" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-success">

</form>

<?php
rodape();
?>
