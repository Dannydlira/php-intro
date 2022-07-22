<?php

$data = new DateTime();

$intervalo = new DateInterval('PT5M'); // adiciona um período de 5 minutos
$data->add($intervalo);


//echo $data->format('d-m-y') . PHP_EOL;
//echo date('d/m/y') . PHP_EOL;