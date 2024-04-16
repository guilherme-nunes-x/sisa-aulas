<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>lista de alunos</title>
</head>

<body>
    <header>

        <img src="RX.png" alt="">
        <nav>
            <a href="alunos.html">aluno</a>
            <a href="#">professor</a>
        </nav>
        <img src="RX.png" alt="">

    </header>
    <main>

        <section>
            <h1>Lista de alunos</h1>

            <table>
                <tr id="l1">
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>idade</td>
                    <td>data</td>
                </tr>              
                <tr>
                <?php
                $nome = $_GET['nome'];
                $endereco = $_GET['endereco'];
                $idade = $_GET['idade'];
                $data = $_GET['data'];

                echo"<td>$nome</td>";
                echo"<td>$endereco</td>";
                echo"<td>$idade</td>";
                echo"<td>$data</td>";
            
                ?>
                </tr> 
            </table>
        </section>
    </main>
    <footer>rodape</footer>
</body>

</html>