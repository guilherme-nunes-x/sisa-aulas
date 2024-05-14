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
        <h2></h2>
    </div>
    <pre>
        <?php
        for ($i = 0; $i < count($var); $i++) {
            echo " <br> $i : $var[$i]";
        }
        ?>
    </pre>

</body>

</html>
<h1></h1>