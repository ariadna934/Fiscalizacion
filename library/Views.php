<?php
class Views
{
    
    function __construct(){

    }
    function render($controller,$view){
        //get_class obtiene el nombre de la clase de un objeto

        $controllers= get_class($controller);
        if($controller=='Index'){
            require VIEWS.$controllers.'/'.$view.'.php';
            
        }
        else{
            require VIEWS.DFT."header.php";
            require VIEWS.$controllers.'/'.$view.'.php';
            require VIEWS.DFT."footer.php";
        }

    }
}

?>