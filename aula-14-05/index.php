<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>VS</title>
</head>

<body>
    <div class="sg">
        <h1>Array:</h1>
        <h2>definição explicita(sem chave)</h2>
    </div>

    <pre>
        <?php
        $var = array(1, 2, 3, 4, 5);
        echo "Impressao 1 por 1<br>";
        echo $var[0] . "<br>";
        echo $var[1] . "<br>";
        echo $var[2] . "<br>";
        echo $var[3] . "<br>";
        echo $var[4] . "<br>";

        $aluno = array(1 =>"e1",2=>"e2",3=>"e3",4=>"e4",5=>"e5");
        ?>
    </pre>

    <div class="sg">
        <h1>Array:</h1>
        <h2>impressao com For</h2>
    </div>
    <pre>
        <?php
        for ($i = 0; $i < count($var); $i++) {
            echo " <br> $i : $var[$i]";
        }
        ?>
    </pre>

    <div class="sg">
        <h1>Array:</h1>
        <h2>impressao com foreach</h2>
    </div>
    <pre>
        <?php
        foreach ($var as $dados) {
            echo "<br>" . $dados;
        }
        ?>
    </pre>

    <div class="sg">
        <h1>Array:</h1>
        <h2>impressao com 2° foreach</h2>
    </div>
    <pre>
        <?php
        foreach ($aluno as $dado1s) {
            echo "<br>" . $dado1s;
        }
        echo "<br>";
        foreach ($aluno as $dado2s => $vls) {
        echo "<br>a chave é $dado2s e o valor é $vls";
        }
        ?>
    </pre>

</body>

</html>
<h1></h1>