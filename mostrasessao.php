<?php

session_start();
echo "Váriaveis na sessão:<p>";

if (isset($_SESSION['nome'])) {
    echo "Nome: $_SESSION[nome] <br>";
    echo "CPF: $_SESSION[cpf]";
} else {
    echo "Não existe variáveis na sessão.";
}