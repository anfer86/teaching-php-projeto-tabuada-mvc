<?php

class TabuadaController
{
  
  function __construct(){  
  }

  function gerarTabuada($request){
  	$data = $request->getBody();
  	
  	// Verificação de Dados  	
  	if (! isset($data['numero'])){
  		return "Erro na página";
  	} 

  	// Pede ao model para gerar a tabuada
  	$numero = $data['numero'];
  	$model = new TabuadaModel($numero, 10);
  	$response = $model->gerarTabuada();
  	
    // Renderiza a view enviand oa resposta
    $view = new View();
    $view->render('calcularTabuada', $response);
    
  }

}

?>