<?php
class Usuario extends Controllers
{
    function __construct(){
        parent::__construct();
    }

    public function userLogin(){

        if(isset($_POST['usuario']) and isset($_POST['password'])){
            echo 1;
        }
    }
}


?>
