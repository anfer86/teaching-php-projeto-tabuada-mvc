<?php
class View {
    
    public function __construct() {
    }
    
    public function render($str, $response = null){
        session_start();
        $_SESSION['response'] = $response;  
        // Renderiza a view calcularTabuada.php
        return header("Location: src/views/" . $str . ".php");

    }
}

?>