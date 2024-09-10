<?php 
	class Medicos extends Controllers{
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
    
        public function Medicos()
        {
            $data['page_tag'] = "Medicos";
            $data['page_title'] = "Medicos";
            $data['page_name'] = "medicos";
            $data['page_functions_js'] = "functions_medicos.js";
            $this->views->getView($this,"medicos",$data);
        }

	}
 ?>