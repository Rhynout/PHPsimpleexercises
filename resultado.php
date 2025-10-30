<html>
<head>
<title>Bricks</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boots
trap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<body>
<div class="container">
<div class="jumbotron">

<?php

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$t5 = $_POST['t5'];

if($t1=="" or $t2=="" or $t3=="" or $t4=="" or $t5==""){
    echo "<h2>We need more info!</h2>";
    echo "<a href='javascript:history.back()'> Go back </a>";
    exit;
}

$tp = $t5 * $t4;
$tt = $t2 * $t3;
$tm = $tp / $tt;

echo "<span class=\"azul\"> <h2>Brick's type: $t1 </h2> <br>Bricks: $tm </span><p>";

for ($i = 0; $i < $tm; $i++) {
    echo "<img src='tijolo.png' width='20' height='10'>";
}

?>

<scriptsrc="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<scriptsrc="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<scriptsrc="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>