<?php 
	class Historial extends Controllers{
        public function __construct()
        {
            parent::__construct();
            session_start();
            //session_regenerate_id(true);
            if(empty($_SESSION['login']))
            {
                header('Location: '.base_url().'/login');
                die();
            }
           
        }
    
        public function Historial()
        {
            $data['page_tag'] = "Historial";
            $data['page_title'] = "Historial";
            $data['page_name'] = "historial";
            /* $data['page_functions_js'] = "functions_clientes.js"; */
            $this->views->getView($this,"historial",$data);
        }

	}
 ?>