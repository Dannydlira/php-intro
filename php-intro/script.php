<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome']; //aqui pode mudar para Get, assim vai mostrar no corpo da requisição e não na URL
$idade = $_POST['idade'];

var_dump($nome); //var_dump mostra o tipo da variável se é string, int.....
var_dump($idade);
return 0;

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
            echo "O nadador " . $nome . " Compete na categoria " . $categorias[$i];
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente')
            echo "O nadador " . $nome . " Compete na categoria adolescente";
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto')
            echo "O nadador " . $nome . " Compete na categoria adulto";
    }
}
