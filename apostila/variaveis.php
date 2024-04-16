<?php

$valor = "Bill gates";
$tipo = gettype($valor);
echo "$valor ($tipo)";
if (is_string($valor)): {
    echo " o valor é um texto";
}
else: 
    echo " esse valor não é texto";
endif;
echo "<br>";
$valor = 24;
$tipo = gettype($valor);
echo "$valor ($tipo)";
if (is_int($valor)): {
    echo " o valor é um inteiro";
}
else: 
    echo " esse valor não é inteiro";
endif;
echo "<br>";
$valor = 34.4;
$tipo = gettype($valor);
echo "$valor ($tipo)";
if (is_float($valor)): {
    echo " o valor é um float";
}
else: 
    echo " esse valor não é float";
endif;
echo "<br>";
$valor = true;
$tipo = gettype($valor);
echo "$valor ($tipo)";
if (is_bool($valor)): {
    echo " o valor é um boleano";
}
else: 
    echo " esse valor não é boleano";
endif;
echo "<br>";
$valor = null;
$tipo = gettype($valor);
echo "$valor ($tipo)";
if (is_null($valor)): {
    echo " o valor é um null";
}
else: 
    echo " esse valor não é null";
endif;
echo "<br>";


