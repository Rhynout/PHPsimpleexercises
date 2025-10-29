<html>
<head>
<title>Var</title>
<meta charset="utf-8">
</head>
<body>


<?php

//vars
$n1 = 100;​
$n2 = 50;​
​$idade15 = 15;
$idade25 = 25;
$ano = 2021;
$tempo = $idade25 - $idade15;
$ano10 = $ano - $tempo;

echo "Valor de n1: $n1 - Valor de n2: $n2<p>";

$total = $n1+$n2;​
echo "A soma é: $total<br>";​

$total = $n1-$n2;​
echo "A subtração é: $total<br>";​

$total = $n1*$n2;​
echo "A multiplicação é: $total<br>";​

$total = $n1/$n2;​
echo "A divisão é: $total<br>";​

echo "<br><br> Certa pessoa tinha ". $idade15. " anos";
echo "<br> Atualmente, ou seja, no ano de ". $ano. " ela tem ". $idade25. " anos";
echo "<br> Logo, se passaram ". $tempo. " anos desde que ela tinha ". $idade15. ", em ". $ano10. ".";

?>​

</body>
</html>
