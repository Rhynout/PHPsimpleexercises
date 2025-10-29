<DOCTYPE html>
<meta-charset UTF-8>

<head>
<title> while </title>
</head>

<body>

<?php

$accam=0;
$accam2=1;

while($accam<=100) {
    echo "Account Amount: $accam<br>";
    $accam++;
}

while($accam2<=100) {
    if($accam2==50){
        echo "<h1 style=\"color:red;\">Account Amount: $accam2</h1>";
    }
    else{
        echo "Acc Amount: $accam2<br>";
    }
    $accam2++;
}

?>

</body>
</html>