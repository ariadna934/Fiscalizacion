<?php
 
class Index_model{
    private $data= array();
    function __construct(){
        $this->data = array("INGLÉS","FRANCÉS");
    }
    function datosPersonales(){
        return $this->data;
    }
}
?>