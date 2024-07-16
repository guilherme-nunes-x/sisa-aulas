<!-- <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once ('router.php');
if (!empty($_POST['form_submit'])) {
    rotas($_POST['acao']);
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <button type="button" value="cadastrar/0" name="acao" class="btn btn-primary btn-lg">Cadastrar</button>
        <button type="button" value="alterar/1" name="acao"class="btn btn-danger btn-lg">alterar</button>
        <button type="button" value="remover/2" name="acao" class="btn btn-success btn-lg">remover</button>
    </form>
</body>

</html>