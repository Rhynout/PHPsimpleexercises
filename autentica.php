<?php
$nome = $_POST['nome'];

if($nome == 'Daniel Silva Souza') {
    session_start();
    $_SESSION['nome'] = $nome;
    echo "Autenticando Usuário, Aguarde...";
    Header("Refresh:2; URL=inicio.php");
} else {
    echo "Usuário inválido!";
    Header("Refresh:2 URL=form.php");
}
?>