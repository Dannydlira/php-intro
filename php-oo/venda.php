<?php

//declare(strict_types=1);

class vendaDoces
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function __toString()
    {
        return 'Produto: ' . "<br>"
        . $this->produto . "<br>" 
        . $this->data . "<br>"
        . $this->quantidade . "<br>"
        . $this->valorTotal;
    }   
}

$datas = new DateTime();

$vendas = new vendaDoces(
    $datas->format('d-m-y') . PHP_EOL,                 // data
    'Chocolate',                                       //produto
    '10',                                              //quantidade
    '35.00',                                           //valorTotal
);

echo $vendas;

//var_dump($vendas);