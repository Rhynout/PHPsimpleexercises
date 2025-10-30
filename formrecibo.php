<html>
<head><title>form</title></head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="jumbotron">

<body>

<h1>Preencha os dados do recibo</h1>

<form method="post" action="recibo.php" name="f1" id="f1"><p>

Nome:<input type="text" name="nome" size="50" maxlength="50" class="form-control"><p>
Idade:<input type="text" name="idade" size="10" maxlength="10" class="form-control"><p>
CPF:<input type="text" name="cpf" size="20" maxlength="20" class="form-control"><p>
RG:<input type="text" name="rg" size="20" maxlength="20" class="form-control"><p>
Devedor:<input type="text" name="credor" size="50" maxlength="50" class="form-control"><p>
Valor:<input type="text" name="valor" size="10" maxlength="10" class="form-control"><p>

<input type="submit" class="btn btn-primary" value="Criar recibo">

<form>
<input type="reset" class="btn btn-primary" value="Limpar">

</form>

</body>
</html>


