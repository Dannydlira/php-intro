<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoCategoriaCompetidor.php";
include "servicos/servicoValidacao.php";

$nome = $_POST['nome']; //aqui pode mudar para Get, assim vai mostrar no corpo da requisição e não na URL
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);
header('location: index.php');

//var_dump($nome); var_dump mostra o tipo da variável se é string, int.....
//var_dump($idade);
//return 0;