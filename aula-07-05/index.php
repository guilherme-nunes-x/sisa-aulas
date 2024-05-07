<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VS</title>
</head>

<body>
    <div class="sg">
        <h1>Array:</h1>
        <h2>definição inplicita</h2>
    </div>
    <pre>
    <?php
    $var = array("jonh", "eric", "mander", "erverssom", "jose", "marick", "edmund", "varsen");
    echo "<h3>for :</h3> <br>";
    for ($i = 0; $i < 8; $i++) {
        echo "$i = " . $var[$i] . "<br>";
    }
    echo "<br> Numero de elemento: " .count($var) ."<br>";
    echo "<h2><br>Pre-teste</h2>";
    $number= array(0,1,2,3,4,5,6,7,8,9,10);
    echo "<br><h3>for :</h3> <br>";
    for ($i = 0; $i <count($number); $i++) {
        echo "$i = " . $number[$i] . "<br>";
    }
    echo "<br> Numero de elemento: ".count($number) ."<br>";
    //echo "Forseach :";
    //foreach ($var as $dado) {
    //    echo $dado."<br>";
    //}
    ?>
    </pre>
</body>

</html>