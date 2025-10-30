<html>
<head>
<title>Amostra de dados</title>
</head>

<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

echo "Nota 1: $n1<p>";
echo "Nota 2: $n2<p>";
echo "Nota 3: $n3<p>";
echo "Nota 4: $n4<p>";

if($n1=="" or $n2=="" or $n3=="" or $n4==""){
    echo "Campo em branco!<br>";
    echo "<a href='javascript:history.back()'> Voltar </a>";
    exit;
}

$media = ($n1 + $n2 + $n3 + $n4) / 4;

    if($media >= 7) {
        echo "<p>$media - Aprovado</p>";
    }else{
        echo "<p>$media - Reprovado</p>";
    }

    ?>

</body>
</html>