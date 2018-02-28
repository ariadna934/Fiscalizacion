<?php
require 'config.php';//constantes 

$url = isset($_GET["url"])?$_GET["url"]:"Index/index";
$url =explode("/",$url);//divide en arrays donde estan los / y los quita

$controller="";
$method="";

if(isset($url[0])){
    $controller = $url[0];// primera parte de la cadena, antes del  /
    
}

if(isset($url[1])){
    if($url[1]!=''){
        $method = $url[1];
    }
}

if(isset($url[2])){
    if($url[1]!=''){
        $params = $url[2];
    }
}
spl_autoload_register
    (function($class){
        if(file_exists(LBS.$class.".php")){
        require LBS.$class.".php";
    }
});

//new Controllers(); era para probar
//Llamamos a los controladores
$controllersPath = 'controllers/'.$controller.'.php';
//si el archivo existe
if(file_exists($controllersPath)){
    require $controllersPath;
    
    //instanciamos la clase
    $controller = new $controller();
    if(isset($method)){
        if(method_exists($controller,$method)){
            //LLama al método de ese controlador
            if(isset($params)){
                $controller->{$method}($params);
            }
            else{
                $controller->{$method}();    
            }
            
        }
        else{
            echo "No existe el método";
        }
        
        
    }
}else{
    echo "Error: en la dirección no existe el controlador.";
}

?>