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

//Valores fixos
$return = som_text();
echo "<br>".$return;
//Valores variaveis
$return = som(2, 5);
echo "<br>"; 
echo "a soma foi igual ".$return;

$return = div(10, 5);
echo "<br>";
echo "a divisão foi igual ".$return;

$return = redu(4, 10);
echo "<br>"; 
echo "a redução foi igual ".$return;

$return = multi(5, 5);
echo "<br>"; 
echo "a multiplicação foi igual ".$return;

$return = multi3(5, 2, 4);
echo "<br>"; 
echo "a multiplicação por três foi igual ".$return;


$return = div4(1000, 5, 5,5);
echo "<br>"; 
echo "a divisão por quatro foi igual ".$return;

$return = soma2(16, 5, 5,5);
echo "<br>"; 
echo "a divisão por quatro foi igual ".$return;

// for($i = 0; $i<100; $i++){
// $var = $i;
// $var1 = $i*2;

// $return = som($var, $var1);
// echo "<br>"; 
// echo "a soma foi igual ".$return;

// }
$return = sem2(5);
echo "<br>"; 
echo "a equação foi igual ".$return;

$return = eleve(som(25,25));
echo "<br>"; 
echo "a equação foi igual ".$return;

$return = som(eleve(5), 5);
echo "<br>"; 
echo "a equação foi igual ".$return;

// $return = super(1000);
// echo "<br>"; 
// echo "a equação foi igual Array".$return;

function som($var, $var1){
    $soma = $var + $var1;
    return $soma;
}

// function super($var){
//     for($i = 0;$i<$var; $i++){
//         $init[$i] = $i + 1;
//     }
//     return $init[];
// }
function div4($var, $var1, $var2, $var3){
    $text_div = $var / $var1 / $var2 / $var3;
    return $text_div;
}
function soma2($var, $var1, $var2, $var3){
    $text_div = $var + $var1 + $var2 + $var3;
    return $text_div;
}
function sem2($var){
    $text_div = ($var * $var) + $var /$var - $var;
    return $text_div;
}
function eleve($var){
    $text_div = ($var * $var);
    return $text_div;
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

function multi3($varl, $varl2, $varl3){
    $text_multi = $varl * $varl2 * $varl3;
    return $text_multi;
}
?>

</body>
</html>