<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 21-05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Constantes</h1>

<?php 

$var = 3.14;
define("number", $var*3);
echo number;
$var1 = 23;
//Valores fixos
$return = som_text();
echo "<br>".$return;
//Valores variaveis
$return = som($var, $var1);
echo "<br>"; 
echo "a soma foi igual ".$return;

$var = 50;
$var1 = 25;

$return = div($var, $var1);
echo "<br>";
echo "a divisão foi igual ".$return;

$var = 46;
$var1 = 23;

$return = redu($var, $var1);
echo "<br>"; 
echo "a redução foi igual ".$return;

$var = 5;
$var1 = 20;

$return = multi($var, $var1);
echo "<br>"; 
echo "a multiplicação foi igual ".$return;
function som($var, $var1){
    $soma = $var + $var1;
    return $soma;
}
function som_text($varl = 2, $varl2 = 4){
    $text_som = $varl + $varl2;
    return $text_som;
}
function div($varl, $varl2){
    $text_div = $varl / $varl2;
    return $text_div;
}
function redu($varl, $varl2){
    $text_redu = $varl - $varl2;
    return $text_redu;
}
function multi($varl, $varl2){
    $text_multi = $varl * $varl2;
    return $text_multi;
}
?>

</body>
</html>