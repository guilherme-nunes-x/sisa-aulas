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
        <h2>definição inplicita</h2>
    </div>
    <pre>
    <?php
    // $var = array("jonh", "eric", "mander", "erverssom", "jose", "marick", "edmund", "varsen");
    // echo "<h3>for :</h3> <br>";
    // for ($i = 0; $i < 8; $i++) {
    //     echo "$i = " . $var[$i] . "<br>";
    // }
    // echo "<br> Numero de elemento: " . count($var) . "<br>";
    // echo "<h2><br>Pre-teste</h2>";
    // $number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    // echo "<br><h3>for :</h3> <br>";
    // for ($i = 0; $i < count($number); $i++) {
    //     echo "$i = " . $number[$i] . "<br>";
    // }
    // echo "<br> Numero de elemento: " . count($number) . "<br>";

    echo "<h1>Forseach :</h1><br>";
    $varl = array("jonh" => 6.1, "eric" => 11, "mander" => 15, "erverssom" => 0, "jose" => 5.3, "marick" => 3, "edmund" => 7, "varisen" => 12, "pedro" => 25);
    foreach ($varl as $i => $valores) {
        echo "Alunos: " . $i . " e sua nota " . $valores . "<br>";
    }
    echo "<br><br>";
    echo "<h1>Forseach com if else :</h1> <br><br>";
    foreach ($varl as $i => $valores) {
        // echo "Os valores são $valores e seus indices $i <br> <br>";
        if ($valores <= 10 && $valores > 6) {
            echo "Aluno aprovado: " . $i . " e sua nota " . $valores . "<br>";
        } elseif ($valores <= 6  && $valores >= 4) {
            echo "Aluno recuperacao: " . $i . " e sua nota " . $valores . "<br>";
        } elseif ($valores < 4) {
            echo "Aluno reprovado: " . $i . " e sua nota " . $valores . "<br>";
        } elseif ($valores > 10) {
            echo "Aluno com nota extra: " . $i . " e sua nota " . $valores . "<br>";
            echo "pontos extras : ". $valores - 10 ."<br>";
        }
    }
    ?>
    </pre>
</body>

</html>
<h1>