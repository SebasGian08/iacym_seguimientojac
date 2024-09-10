<?php 
	class Celulas extends Controllers{
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
    
        public function Celulas()
        {
            $data['page_tag'] = "Celulas";
            $data['page_title'] = "Celulas";
            $data['page_name'] = "celulas";
            $data['page_functions_js'] = "functions_celulas.js";
            $this->views->getView($this,"celulas",$data);
        }


        public function list()
		{
				$arrData = $this->model->selectCelulas();
				for ($i=0; $i < count($arrData); $i++) {
					$btnView = '';
					$btnEdit = '';
					$btnDelete = '';

					if($arrData[$i]['status'] == 1)
					{
						$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
					}else{
						$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
					}
						$btnView = '<button class="btn btn-info btn-sm" onClick="fntViewInfo('.$arrData[$i]['id'].')" title="Ver Celula"><i class="far fa-eye"></i></button>';
						$btnEdit = '<button class="btn btn-primary  btn-sm" onClick="fntEditInfo(this,'.$arrData[$i]['id'].')" title="Editar Celula"><i class="fas fa-pencil-alt"></i></button>';
						$btnDelete = '<button class="btn btn-danger btn-sm" onClick="fntDelInfo('.$arrData[$i]['id'].')" title="Eliminar Celula"><i class="far fa-trash-alt"></i></button>';
			
					$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
				}
				echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}
	}
 ?>