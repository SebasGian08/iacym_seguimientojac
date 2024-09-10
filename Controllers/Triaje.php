<?php 
	class Triaje extends Controllers{
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
    
        public function Triaje()
        {
            $data['page_tag'] = "Triaje";
            $data['page_title'] = "Triaje";
            $data['page_name'] = "triaje";
            /* $data['page_functions_js'] = "functions_clientes.js"; */
            $this->views->getView($this,"triaje",$data);
        }

	}
 ?>