<?php
class View {
    
    public function __construct() {
    }
    
    public static function render($str, $response = null){
        session_start();
        $_SESSION['response'] = $response;  
        // Renderiza a view calcularTabuada.php
        header("Location:src/views/" . $str . ".php");
        exit();

    }

    /*
    Teste
    public static function render1($str, $response = null){
    	
    	ob_start(); //this has to be the first line of your page
    	$_SESSION['response'] = $response; 
		header("Location:src/views/" . $str . ".php");
		print ob_get_clean(); 

		//this has to be the last line of your page
        #//$_SESSION['response'] = $response; 
		#ob_start();
		#include ("src/views/" . $str . ".php");
        #print ob_get_clean();
    }
    */
}

?>