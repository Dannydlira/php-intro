<?php

function validaNome(string $nome) : bool
{
    if (empty($nome))
    {
        setarMensagemDeErro('O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }
    else if (strlen($nome) < 3)
    {
        setarMensagemDeErro('O nome não pode conter menos que 3 caracteres');
        return false;
    } else if (strlen($nome) > 40)
    {
        setarMensagemDeErro('O nome não pode conter, mais que 40 caracteres');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if (!is_numeric($idade))
    {
    setarMensagemDeErro('Informe um número para a idade');
    return false;
    }
    return true;
}


