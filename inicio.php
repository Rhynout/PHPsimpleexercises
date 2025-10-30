<?php

session_start();

if(isset($_SESSION['nome'])) {
    echo "Nome: $_SESSION[nome] <br>";
    echo "Bem-Vindo!";
} else {
    echo "Autenticação necessária!";
    Header("Refresh:1; URL=form.php");
}