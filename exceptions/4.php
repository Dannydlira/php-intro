<?php

function validaUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos!\n");                   //foi feito uma exceptions
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

try {
    $status = validaUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "\n... executando ...\n";