<?php
class Autoload {
    
    public function __construct() {
        spl_autoload_extensions('.class.php');
        spl_autoload_register(array($this, 'load'));
    
    }
    
    private function splitClassName($className){
    	return preg_split('/(?=[A-Z])/',$className);
    }
    
    private function getFolderName($className){    	    	
    	$splitted = $this->splitClassName($className);
    	$folder = strtolower(end($splitted));
    	return $folder;
    }
    
    private function load($className) {
        $extension = spl_autoload_extensions();
        $folder = $this->getFolderName($className) . 's';        
        require_once (__DIR__ . '/' . $folder . '/' . $className . $extension);
    }
}

$autoload = new Autoload();
?>