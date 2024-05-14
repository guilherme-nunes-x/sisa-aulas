<!DOCTYPE html>
<html lang="pt-br">

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
        echo  "<br>" . $var[0];
        echo  "<br>" . $var[1];
        echo  "<br>" . $var[2];
        echo  "<br>" . $var[3];
        echo  "<br>" . $var[4];

        $aluno = array("e1" => 1,"e2" => 12,"e3" => 13,"e4" => 14,"e5" => 15);
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
        echo "<br>a chave é $dado2s e sua idade é $vls";
        }
        ?>
    </pre>

    <div class="sg"> 
        <h1>Array:</h1>
        <h2>Exposição com print_r</h2>
    </div>

    <pre>
        <?php
        print_r($var);
        print_r($aluno);
        ?>
    </pre>

    <div class="sg"> 
        <h1>Array:</h1>
        <h2>Multidimensional</h2>
    </div>

    <pre>
        <?php
    $Alunos = array ("jon" => array("endereco" => "Rua marela", "bairro" => "Pernambuco"),
"eric" => array("endereco" => "Rua verde", "bairro" => "maranhão"),
"mary" => array("endereco" => "Rua vermelho", "bairro" => "são sebastião"));

print_r($Alunos);
print_r($Alunos['eric']["endereco"]);
// print_r($Alunos['jon']);
// print_r($Alunos['mary']);
        ?>
    </pre>
</body>

</html>
<h1></h1>