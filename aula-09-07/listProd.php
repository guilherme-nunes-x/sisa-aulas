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
    echo "<table>";
    echo "<tr>";
    echo "<th>nProd</th>";
    echo "<th>Cbarras</th>";
    echo "<th>Marcas</th>";
    echo "<th>laboratorio</th>";
    echo "<th>precoV</th>";
    echo "<th>PrecoC</th>";
    echo "<th>Quant</th>";
    echo "<th>validade</th>";
    echo "<th>fornecedo</th>";
    echo "<th>dtfabricacao</th>";
    echo "<th>Receita</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$_POST['produto']."</td>";
    echo "<td>".$_POST['barras']."</td>";
    echo "<td>".$_POST['marcas']."</td>";
    echo "<td>".$_POST['laboratorio']."</td>";
    echo "<td>".$_POST['precov']."</td>";
    echo "<td>".$_POST['precoc']."</td>";
    echo "<td>".$_POST['quant']."</td>";
    echo "<td>".$_POST['validade']."</td>";
    echo "<td>".$_POST['fornecedor']."</td>";
    echo "<td>".$_POST['dtfab']."</td>";
    echo "<td>".$_POST['receita']."</td>";
    echo "</tr>";
    echo "</table>"

    ?>
</body>

</html>