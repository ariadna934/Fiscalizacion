<?php

#importamos el modelo general de la bd
require_once('db_abstract_model.php');

class Usuario_model extends DBAbstractModel{
    

#definir las variables de la clase
   public $id; 
   public $user; 
   public $password; 
   public $tipo; 
   public $nombres; 
   public $apellidos;
   public $dni;
    
    
    #auxiliar

    
#definimos las clases abstractas heredadas
    

    
    public function get($user_name=''){
        if($user_name != ''){
            $this->query = "SELECT * FROM USUARIO where usu_usuario_v = '$username' ";
            $this->get_results_from_query();
            
        }
        
        if(count($this->rows)==1){
            foreach ($this->rows[0] as $propiedad =>$valor){
                $this ->$propiedad = $valor;
            }
            $this->mensaje = 'USUARIO ENCONTRADO';
        }
        else{
            $this->mensaje = 'USUARIO NO ENCONTRADO';
        }
    }

    public function set($usuario = '' , $clave= '', $tipo = '', $nombres = '', $apellidos = '' , $dni= ''){
        $this->query = "INSERT into Usuario usu_usuario_v = '$usuario',
                                    usu_usuario_v = '$usuario',
                                    usu_password_v = '$clave',
                                    usu_tipo_v = '$tipo',
                                    usu_nombres_v = '$nombres',
                                    usu_apellidos_v = '$apellidos',
                                    usu_dni_v = '$dni' ";
        $this->execute_single_query();                                
    }
        
        
        
        
#definir funciones propias de la clase
    
    function __construct(){
        $this->db_name = 'fiscalizacion_administrativo';
    }
    
    public function verificarDatos(){

        
    }
    
    public function verificarSesion(){
        
    }
    
    public function listarUsuarios(){
            $this->query = "SELECT * FROM USUARIO";
            $resultado = array();
            $resultado = $this->get_results_from_query();               
            return $resultado;
    }


    
}


?>