<?php

    
class Controllers
{

    function __construct(){
        $this->view = new Views();
        $this->loadClassModels();
    }
    
    function loadClassModels(){
        $model = get_class($this).'_model';//coge "index" o de donde la heredaron
        $path = 'models/'.$model.'.php';
        if(file_exists(($path))){
            require $path;
            $this->model = new $model();
        }
    }
}
?>