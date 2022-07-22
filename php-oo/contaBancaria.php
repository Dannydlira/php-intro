<?php

declare(strict_types=1);

class contaBancaria 
{
    //public - private - protected
    /**     
     * @var [string]
     */
    private $banco;

    /**     
     * @var [string]
     */
    private $nomeTitular;

    /**     
     * @var [string]
     */
    private $numeroAgencia;

    /**     
     * @var [string]
     */
    private $numeroConta;

    /**     
     * @var [float]
     */
    private $saldo;

    //método construtor, executa assim que instacia a classe.   
    public function __construct( 
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    //criando o método(que é uma função tbm) obter saldo.
    public function obterSaldo(): string                    
    {
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }

    public function depositar($valor): string
    {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . $valor . ' realizado!';
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado!';
    }
}

$conta = new contaBancaria(
    'Banco do Brasil',                                 //banco
    'Daniela Lira',                                    //nomeTitular
    '562',                                             //numeroAgencia
    '3456-5',                                          //numeroConta
     0,                                                //saldo
);                                                     //instaciando a contaBancaria e criando o objeto conta.

echo ($conta->obterSaldo());  // 0

echo "<br>";

echo $conta->depositar(300.00);

echo "<br>";

echo $conta->obterSaldo(); // 300.00

echo "<br>";

echo $conta->sacar(150.00);

echo "<br>";

echo $conta->obterSaldo(); // 150.00

//echo $conta->obterSaldo();                             // invocando o método.

//var_dump($conta->nomeTitular);                       // acessando o atributo e o tipo dela.