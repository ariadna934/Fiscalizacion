<?php   
class Session 
{
    //Iniciamos la sesion
    function start(){
        @session_start();

    }
    //Obtenemos el valor de un de los indice de sesion
    static function getSession($name){
        return $_SESSION[$name];
    }
    static function setSession($name,$data){
        $_SESSION[$name]=$data;
    }
    static function destroy(){
        @session_destroy();
    }
}



?>