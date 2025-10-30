<?php

require_once "funcoes.php";
cabecalho("Área Parede");

$atijolo = $_POST['atijolo'];
$ltijolo = $_POST['ltijolo'];
$aparede = $_POST['aparede'];
$lparede = $_POST['lparede'];
$tipo = $_POST['tipo'];

verificacampo("Altura tijolo", $atijolo);
verificacampo("Largura tijolo", $ltijolo);
verificacampo("Altura parede", $aparede);
verificacampo("Largura tijolo", $lparede);

$tijolo = calculaarea($atijolo, $ltijolo);
$parede = calculaarea($aparede, $lparede);

$qt = $parede / $tijolo;

echo "<span class=\"azul\"> <h2> Tipo: $tipo </h2> Quantidade de tijolos: $qt</span><p>";

for ($i = 0; $i < $qt; $i++) {
    echo "<img src='tijolo.png' width='20' height='10'>";
}

rodape();