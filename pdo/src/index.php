<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':

        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'ID: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }

        break;

    case 'insert':

        $status = $produto->insert('Produto Teste da Daniela Lira 01');

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro inserido com sucesso!";

        break;

    case 'update':

        $status = $produto->update('Produto Teste da Petrus Lira 03', 3);

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro atualizado com sucesso!";

        break;

    case 'delete':

        $status = $produto->delete(4);

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro deletado com sucesso!";

        break;

    default:

        break;
}
