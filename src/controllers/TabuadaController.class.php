<?php

class TabuadaController
{

  private $view = new View();
  
  function __construct(){  
  }

  function gerarTabuada($request){
  	$data = $request->getBody();
  	
  	// Verificação de Dados  	
  	if (! isset($data['numero'])){
  		return $this->render('erro', $response);;
  	} 

  	// Pede ao model para gerar a tabuada
  	$numero = $data['numero'];
  	$model = new TabuadaModel($numero, 10);
  	$response = $model->gerarTabuada();
  	
    // Renderiza a view enviand oa resposta    
    $this->view->render('calcularTabuada', $response);
    
  }

}

?>