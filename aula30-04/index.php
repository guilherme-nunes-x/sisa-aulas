<?php
$var = array(2, 5, 7, 9, 11);
$var1 = array("ricardo", "jack", "teca");
$var2 = array("linux", 10, 2024, "v1.2021");
$var3 = array(
    "jonh" =>    30,
                "lionel" =>    20, 
            "lane" =>  18
);

$num = array(2 => 7, 3 => 8, 9 => 5);
$num [1] = 4;
$num [8] = 40;
$num [3] = 9;

$var5[0] = "Desenvolvimento";
$var5[1] = "Web";
$var5[2] = "II";

echo "exemplo1 ";
echo "<br>[for]: ";
echo "$var[0] ";
echo "$var[1] ";
echo "$var[2] ";
echo "$var[3] ";
echo "$var[4] ";

echo "<br><br>exemplo2 ";
echo "<br>[for]:";
echo "$var1[0] ";
echo "$var1[1] ";
echo "$var1[2] ";

echo "<br><br>exemplo3 ";
echo "<br>[for]: ";
for ($a=0; $a<count ($var2); $a++) {
    echo "$var2[$a] ";
}

echo "<br><br>exemplo4 ";
echo "<br>[for]: ";
echo "<br>O nome e jonh a idade e $var3[jonh] ";
echo "<br>O nome e jonh a idade e $var3[lionel] ";
echo "<br>O nome e jonh a idade e $var3[lane]";

echo "<br><br>exemplo5 ";
echo "<br>[for]:";
echo "<br> $num[1]";
echo "<br> $num[2]";
echo "<br> $num[3]";
echo "<br> $num[9]";
echo "<br> $num[8]";

echo "<br><br>exemplo6 ";
echo "<br>[for]: ";
for($a=0; $a<count($var5); $a++) {
    echo "$var5[$a] ";
}

echo "<br><br>echo exemplo função count";
echo "<br>[for]: ";
$num = array("x", 3, 1, 4, 5, 6, 7, "lionel");
$qnt = count($num);
    echo "A quantidade é $qnt";

?>
