<?php

class TabuadaModel
{
  
  private $numero;
  private $tamanho;
  
  function __construct($numero, $tamanho=10)
  {
   $this->numero = $numero;
   $this->tamanho = $tamanho;
  }

  function gerarTabuada(){
  	$data = array();

  	for ($i = 1; $i <= $this->tamanho ; $i++){
  		$item = array();
  		$item['operando1'] = $this->numero;
  		$item['operando2'] = $i;
  		$item['resultado'] = $this->numero * $i;
  		$data[] = $item;
  	}

  	return $data;

  }
}


?>