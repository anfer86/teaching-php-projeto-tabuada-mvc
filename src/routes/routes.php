<?php

include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);

$router->get('/', function() { 
	# Ao requisitar via GET o endereço raiz
	# da nossa aplicação vamos popular a view principal	
	return View::render('principal');
});

$router->post('/gerarTabuada', function($request) {
	$controller = new TabuadaController();
	return $controller->gerarTabuada($request);	
});

?>