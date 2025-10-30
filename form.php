<html>
<body>

<form method="post" action="autentica.php">
    <label> Nome: </label>
    <input type="text" name="nome">
    <input type="submit" value="Acessar">
</form>

</body>
</html>

<?php
session_start();
session_destroy();
?>