<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alunos</title>
</head>

<body>
    <header>

        <nav>
            <a href="#">disciplina</a>
            <a href="alunos.html">aluno</a>
            <a href="Professor.html">professor</a>
        </nav>

    </header>
    <main>
        
        <section>
            <h3>Cadastro aluno</h3>
            <form action="lista-get.php" method="get">
            <input type="text" name="nome" id="nome" placeholder="digite o nome" required>
            <input type="number" name="idade" id="idade" placeholder="Digite a idade" required>
            <input type="text" name="cpf" id="cpf" placeholder="digite o cpf" required>
            <input type="text" name="endereco" id="endereco"  placeholder="digite o endereço" required>
            <input type="submit" value="Enviar">
        </form>
        </section>
    </main>
    <footer>rodape</footer>
</body>

</html>