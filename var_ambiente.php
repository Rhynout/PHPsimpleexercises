<html>
<head>
<title>Variaveis de ambiente</title>
</head>

<?php
// var_ambiente.php
# var_ambiente.php
/*
var_ambiente.php
*/

echo "<h2>Navegador</h2> $_SERVER[HTTP_USER_AGENT]";
echo "<h2>Endereço de Servidor:</h2> $_SERVER[HTTP_HOST]";
echo "<h2>Caminho e Nome do script:</h2> $_SERVER[PHP_SELF]";
echo "<h2>Servidor Web e versão PHP:</h2> $_SERVER[SERVER_SOFTWARE]";
echo "<h2>Caminho:</h2> $_SERVER[HTTP_REFERER]";
echo "<h2>S.O.:</h2> $_SERVER[SystemRoot]";

?>
</body>
</html>
