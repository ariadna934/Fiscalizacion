<?php
class Index extends Controllers {
    function __construct()
    {
        $response = "";
        parent::__construct();
    }
    
    public function index(){
        $this->view->render($this,'index');
        
        //var_dump($this->view);
    }

    /*public function index2($valor){
        $dato=NULL;
        $i=0;

        $this->response = $this->model->datosPersonales();
        $datos = $this->response;
        foreach ($datos as $value) {
            # code...
            if($datos[$i]==$datos[$valor]){
                $dato=$datos[$i];
            }
            $i++;
        }
        require VIEWS."index.php";
    }*/
}
?>