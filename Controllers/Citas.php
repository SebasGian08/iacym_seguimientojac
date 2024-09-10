<?php 
	class Citas extends Controllers{
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
            getPermisos(MCLIENTES);
        }
    
        public function Citas()
        {
            $data['page_tag'] = "Citas";
            $data['page_title'] = "Citas";
            $data['page_name'] = "citas";
            /* $data['page_functions_js'] = "functions_clientes.js"; */
            $this->views->getView($this,"citas",$data);
        }

	}
 ?>