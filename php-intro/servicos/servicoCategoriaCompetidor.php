<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    if (validaNome($nome) && validaIdade($idade)) {
        removerMensagemDeErro();
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'infantil') {
                    setarMensagemDeSucesso("O nadador " . $nome . " Compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adolescente') {
                    setarMensagemDeSucesso("O nadador " . $nome . " Compete na categoria adolescente");
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adulto') {
                    setarMensagemDeSucesso("O nadador " . $nome . " Compete na categoria adulto");
                    return null;
                }
            }
        }
    } else {
        removerMensagemDeSucesso();
        return obterMensagemDeErro();
    }
}