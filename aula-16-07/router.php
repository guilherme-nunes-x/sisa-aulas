<?php

function rotas($url)
{
    $dados = explode('/', $url);
    if (strcmp($dados[0], "cadastrar") == 0) {
        echo "<script> alert('CADASTRAR')</script>";
    }
    else if (strcmp($dados[0], "alterar") == 0) {
        echo "<script> alert('ALTERAR')</script>";
    }
    else if (strcmp($dados[0], "remover") == 0) {
        echo "<script> alert('REMOVER')</script>";
    }
}