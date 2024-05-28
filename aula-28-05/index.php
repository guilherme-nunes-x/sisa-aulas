<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 21-05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Array Multidimensional: Definição Explícita</h1>

    <h1>Arrays</h1>

<h2>1 - array como lista ordenada</h2>

<?php

    $listOrdem= array (
        'favio','leon', 'jâo'
    );
?>

<pre>
<?php echo print_r($listOrdem) ?>;
</pre>

<?php 
    echo  '<h2> 1.1 - adicionar dados a array </h2>';
    $listOrdem[] = 'Luix';
    $listOrdem[] = 'Renaldo';

?>

<pre>
<?php echo print_r($listOrdem) ?>;
</pre>

<?php 

    echo  '<h2> 2 - array associativa </h2>';
    $var = [
        'nome'=> 'Helisson',
        'endereco'=>'rua cheiro verde',
        'idade'=> 12,
    ];
?>

<pre>
<?php echo print_r($var) ?>;
</pre>

<?php 
    echo  '<h2> 2.1 - adicionar dados ao array associativa </h2>';

    $var['cidade'] = 'guirara';
    $var['estado'] = 'parcel';
?>
<pre>
<?php echo print_r($var) ?>;
</pre>

<?php
    echo  '<h2> 2.2 - substitui os dados ao array associativa </h2>';

    $var['cidade'] = 'jandau';
?>
<pre>
<?php echo print_r($var) ?>
</pre>

<?php
    echo "<h2>3 - Array Multidimensional</h2> <br>";
    $var = [
        'alunos' => [
            [
            'id' => 123,
            'nome' => 'Fabio',
            'endereco' => 'Rua azul',
            'idade' => 22,
            'cidade' => 'Guanambi'
            ],
            [
            'id' => 234,
            'endereco' => 'Rua verde',
            'nome' => 'Jeanderssom',
            'idade' => 35,
            'cidade' => 'Licio'
            ],
            [
            'id' => 345,
            'endereco' => 'Rua Salão preto',
            'nome' => 'Donald',
            'idade' => 54,
            'cidade' => 'Caclé'
            ],
            ['id' => 456,
            'endereco' => 'Rua Salão velho',
            'nome' => 'luis',
            'idade' => 53,
            'cidade' => 'Carlay'
            ],
        ]
    ];

    print_r($var ['alunos'][0]['nome']);
    echo"<br>";

    $var ['alunos'][0]['nome'] = "Falasion";

    print_r($var ['alunos'][0]['nome']);
    echo"<br>";
?>

<pre>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Endereço</th> 
    <th>Idade</th>
    <th>Cidade</th>
  </tr>

<?php
    for($i=0; $i<(count($var ['alunos'])); $i++){
?>

  <tr>
    <td> <?php echo $var ['alunos'] [$i] ['id'] ?> </td>
    <td> <?php echo $var ['alunos'] [$i] ['nome'] ?> </td>
    <td> <?php echo $var ['alunos'] [$i] ['endereco'] ?> </td>
    <td> <?php echo $var ['alunos'] [$i] ['idade'] ?> </td>
    <td> <?php echo $var ['alunos'] [$i] ['cidade'] ?> </td>
  </tr>

  <?php } ?>

  <?php 
$a = count($var['alunos']);
print($a);
?>
</table>
</pre>

</body>
</html>