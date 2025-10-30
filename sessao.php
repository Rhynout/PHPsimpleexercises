<?php

session_start();

$_SESSION['nome'] = "Daniel";
$_SESSION['cpf'] = "111.111.111-11";

echo "Armazenado na sessão!";

?>