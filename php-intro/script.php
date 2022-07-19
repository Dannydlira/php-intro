<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome']; //aqui pode mudar para Get, assim vai mostrar no corpo da requisição e não na URL
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
    header('location: index.php');
    return;
} else if (strlen($nome) < 3) {
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos que 3 caracteres';
    header('location: index.php');
    return;
} else if (strlen($nome) > 40) {
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter, mais que 40 caracteres';
    header('location: index.php');
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'Informe um número para a idade';
    header('location: index.php');
    return;
}

//var_dump($nome); var_dump mostra o tipo da variável se é string, int.....
//var_dump($idade);
//return 0;

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador " . $nome . " Compete na categoria " . $categorias[$i];
            header("location: index.php");
            return;
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador " . $nome . " Compete na categoria adolescente";
            header("location: index.php");
            return;
        }

    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem de sucesso'] = "O nadador " . $nome . " Compete na categoria adulto";
            header("location: index.php");
            return;
        }
    }
}