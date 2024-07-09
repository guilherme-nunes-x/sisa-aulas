<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula-28-05/style.css">
    <style>
        form{
        display: flex;
        /* justify-content: center; */
        align-items: start;
        flex-direction: column;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <form action="listProd.php" method="post">
        <p>nProd <input type="text" name="produto"></p>
        <p>Cbarras <input type="text" name="barras"></p>
        <p>Marcas <input type="text" name="marcas"></p>
        <p>laboratorio <input type="text" name="laboratorio"></p>
        <p>precoV <input type="text" name="precov"></p>
        <p>PrecoC <input type="text" name="precoc"></p>
        <p>Quant <input type="number" name="quant"></p>
        <p>validade <input type="date" name="validade"></p>
        <p>fornecedo <input type="text" name="fornecedor"></p>
        <p>dtfabricacao <input type="date" name="dtfab"></p>
                
       <p>Receita necessaria ? </p>
            <select name="receita" id="receita" aria-placeholder="receita" required>
                <option value="sim" selected>sim</option>
                <option value="não" selected>não</option>
            </select>
            <p> <input type="submit" value="Enviar"></p>
    </form>
</body>

</html>