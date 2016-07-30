<pre>
<?php

require_once 'Carro.php';
require_once './Motor/Motor.php';
require_once './Motor/Motor20.php';

$motor = new Motor20();
$motor->ligar(true);
$motor->alterarRebinboca('xyz');
$motor->parafuseta = 123;

$carro = new Carro($motor);
$carro->abastecer(10);

var_dump($carro);
echo json_decode($carro);