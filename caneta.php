<pre>
<?php

class Caneta {
  /*atributos*/
  public $cor = "Preto";
  public $tamanho = "Padrao";
  public $marca = "Pilot";
  private $tinta = 100;
  
  /*metodos*/
  public function escrever(){
    $this->tinta -= 5;
  }
}

$caneta_preta = new Caneta();

$caneta_preta->cor = "Azul";
$caneta_preta->escrever();
$caneta_preta->escrever();
$caneta_preta->escrever();
$caneta_preta->escrever();

 
var_dump($caneta_preta);