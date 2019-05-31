<?php

class TabuadaController
{

  function __construct(){    
  }

  function gerarTabuada($request){

  	$data = $request->getBody();
  	
  	// Se a informaçõa 'numero' não foi enviada
    // na requisiçõa então vai para uma página
    // de erro
  	if (! isset($data['numero'])){
  		return View::render('erro');;
  	} 

  	// Aqui pedimos para o model gerar uma tabuada
    // de um número para operando de 1 a 10
  	$numero = $data['numero'];
  	$model = new TabuadaModel($numero, 10);
  	$response = $model->gerarTabuada();
  	
    // E finalmente renderizamos a view enviando a resposta
    // que recebemos do model
    View::render('calcularTabuada', $response);
    
  }

}

?>