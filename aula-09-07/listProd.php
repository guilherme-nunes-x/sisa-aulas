<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula-28-05/style.css">
<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

</style>
    <title>Document</title>
</head>

<body>
    <?php
    echo "nProd: " . $_POST['produto'] . "<br>";
    echo "Cbarras: " . $_POST['barras'] . "<br>";
    echo "Marcas: " . $_POST['marcas'] . "<br>";
    echo "laboratorio: " . $_POST['laboratorio'] . "<br>";
    echo "precoV: " . $_POST['precov'] . "<br>";
    echo "PrecoC: " . $_POST['precoc'] . "<br>";
    echo "Quant: " . $_POST['quant'] . "<br>";
    echo "validade: " . $_POST['validade'] . "<br>";
    echo "fornecedo: " . $_POST['fornecedor'] . "<br>";
    echo "dtfabricacao: " . $_POST['dtfab'] . "<br>";
    echo "Receita: " . $_POST['dtfab'] . "<br>";
    ?>
</body>

</html>