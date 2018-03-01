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
    
     public function listarUsuarios(){
        $this->response = $this->model->listarUsuarios();
        $datos = $this->response;
        require VIEWS."usuarios.php";
    }

    public function registrarUsuario(){

     /*   $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $tipo = $_POST['tipo'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $dni = $_POST['dni'];

        $this->response = $this->model->set($usuario, $password,$tipo,$nombres,$apellidos,$dni);*/
        echo 1;
    }

    public function vistaRegistro(){
        require VIEWS."insertar_usuario.php";
    }
}


?>
