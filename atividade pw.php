<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-size:50px; font-family:'Oswald'; color:rgb(57, 151, 151); padding-left:50px

    }
</style>
<body style="background-image: url('https://c.wallhere.com/photos/3a/d3/ac_connor_connor_minimalism_desmond-1005328.jpg!d'); background-size:cover">
<?php
$nome = $_POST['n1'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$valorpago = $_POST['v3'];

$gasto = $v1 + $v2;
$troco = $valorpago - $gasto;



echo "<h1>Nome do Cliente: $nome</h1>";

echo "Produto 1: $p1 ";echo "<br>"; echo "Valor: $v1";
echo "<br>";
echo "Produto 2: $p2 ";echo "<br>"; echo "Valor: $v2";
echo "<br>";echo "<br>";
echo "Valor Total: $gasto";
echo "<br>";
echo "Troco: $troco";
?>

</body>
</html>
