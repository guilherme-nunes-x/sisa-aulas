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

        <img src="RX.png" alt="">
        <nav>
            <a href="#">disciplina</a>
            <a href="alunos.html">aluno</a>
            <a href="Professor.html">professor</a>
        </nav>
        <img src="RX.png" alt="">

    </header>
    <main>
        
        <section>
            <h3>Cadastro aluno</h3>
            <form action="form_post.php" method="post">
            <label for="nome">Nome aluno</label>
            <input type="text" name="nome" id="nome" placeholder="digite o nome" required>
            <label for="idade">idade</label>
            <input type="number" name="idade" id="idade" placeholder="Digite a idade" required>
            <label for="submit"></label>
            <input type="submit" value="Enviar">
        </form>
        </section>
    </main>
    <footer>rodape</footer>
</body>

</html>