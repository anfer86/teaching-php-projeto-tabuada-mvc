<?php

include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);
$view = new View();

$router->get('/', function() {  
	return $view->render('principal');
});

$router->post('/gerarTabuada', function($request) {	
	$controller = new TabuadaController();
	return $controller->gerarTabuada($request);	
});

?>