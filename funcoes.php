<?php

function cabecalho($titulo)
{
    echo"
    <htlml>
    <head>
    <title>$titulo</title>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    </head>
    <body>
    <div class=\"container\">
    <div class=\"jumbotron\">
    ";
}
 
function rodape(){
    echo"
    </div>
    </div>
    </body>
    </html>";
}
function verificacampo($campo, $valor)
 
{
    if (!is_numeric($valor) || $valor <= 0) {
        echo "<h2>Atenção, o campo $campo deve ser número!</h2><p>";
        echo "<a href=\"javascript:window.history.back();\">
        <input type=\"button\" value=\"Voltar\"></a>";
        exit;
    }
}

function calculaarea($alt, $comp)
{
    return $area = $alt * $comp;
}


function verificacampotexto($campo, $valor)

{
    if ($valor == "") {
        echo "<h2>Atenção, o campo $campo deve ser preenchido!</h2>
        <p>";
        echo "<a href=\"javascript:window.history.back();\">
        <input type=\"button\" value=\"Voltar\"></a>";
        exit;
    }
}

function calculaidade($tamanho, $idade)
{
    if ($idade <= 2) {

        if ($tamanho == "pequeno") {​
            $idadecao = $idade * 12.5;​
        }​

        if ($tamanho == "medio") {​
            $idadecao = $idade * 10.5;​
        }​

        if ($tamanho == "grande") {​
            $idadecao = $idade * 9.5;​
        }​

        echo "<img src='novo.jpg' width='100' height='100'>";​

    } else {​

        if ($tamanho == "pequeno") {​
            $idadecao = $idade * 6.5;​
        }​

        if ($tamanho == "medio") {​
            $idadecao = $idade * 5.5;​
        }​

        if ($tamanho == "grande") {​
            $idadecao = $idade * 8;​
        }​

        if ($idade >= 5 && $idade <= 8) {​
            echo "<img src='normal.jpg' width='100' height='100'>";​
        }​

        if ($idade > 8) {​
            echo "<img src='velho.jpg' width='100' height='100'>";​
        }​
    }​

    return $idadecao;​

}

?>