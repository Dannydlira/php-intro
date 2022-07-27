<?php

date_default_timezone_set('America/Sao_Paulo');

class dateTimes
{
    public $dataAtual;
    public $dataDepois;
    public $horas = 10;
    public $minutos = 50;
    public $segundos = 0;
    public $tempo;

    function __construct($dataAtual, $dataDepois)
    {
        $this->data = $dataAtual;
        $this->dataDepois = $dataDepois;
    }

    public function __toString()
    {
        return 'Hora e data: ' . PHP_EOL .
            $this->data . PHP_EOL;
        $this->dataDepois . PHP_EOL;
    }
}

$dataAtual = date('d-m-Y H:i:s');

$timeStamp = strtotime($dataAtual);


$tempo = ($horas * 3600) + ($minutos * 60) + $segundos;

$novaHora = $timeStamp - $tempo;
//$novaData = strtotime('-05 days');

$dataDepois = date('d-m-Y H:i:s', $novaHora);

echo $dataAtual .PHP_EOL;
echo $dataDepois;

//echo date('d-m-Y', strtotime('-05 days')) . PHP_EOL;
//echo date('H:i:s', strtotime('-10 H -50 i s'));
//echo $data->format('d-m-y') . PHP_EOL;
//echo date('d/m/y') . PHP_EOL;
//echo $data->format('d-m-y') . PHP_EOL;
//echo date('d/m/y') . PHP_EOL;