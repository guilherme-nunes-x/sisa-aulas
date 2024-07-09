<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula-28-05/style.css">
    <title>atv</title>
</head>
<body>
 <?php
 function nomeFunc($par = 1, $par2 = 0){
    // echo"Codigo da função<br>";
    return "dados do retorno ". $par." / ".$par2;
 }
 function multi($number){
return $number * 10;
 }
 function number($valor){
    for($i = 0; $i < $valor; $i++){
        echo $valor."<br>";
    }
 }
 $new = 21;
 $returny = nomeFunc();
 echo $returny. "<br>";
 $returny = nomeFunc(12, "bill gates");
 echo $returny. "<br>";
for($i = 1; $i < 11; $i++){
    $returny = nomeFunc($i, "zeca");
    echo $returny. "<br>";
}
for($i = 1; $i <11; $i++){
    echo multi($i). "<br>";
}
echo number(9);

function numberVs($valor){
    for($i = 0; $i < $valor; $i++){
        echo "<script> alert('digite x')</script>";
    }
}
echo numberVs(1);
 ?>   
</body>
</html>