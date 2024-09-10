<?php 

	class PortadasModel extends Mysql
	{
		public $intIdportada;
		public $strNombre;
		public $strDescripcion;
		public $intStatus;
		public $strPortada;
		public $strRuta;

		public function __construct()
		{
			parent::__construct();
		}

		public function insertPortada(string $nombre, string $descripcion, string $portada, string $ruta, int $status){

			$return = 0;
			$this->strNombre = $nombre;
			$this->strDescripcion = $descripcion;
			$this->strPortada = $portada;
			$this->strRuta = $ruta;
			$this->intStatus = $status;

			$sql = "SELECT * FROM portada WHERE nombre = '{$this->strNombre}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO portada(nombre,descripcion,portada,ruta,status) VALUES(?,?,?,?,?)";
	        	$arrData = array($this->strNombre, 
								 $this->strDescripcion, 
								 $this->strPortada,
								 $this->strRuta, 
								 $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}

		public function selectPortadas()
		{
			$sql = "SELECT * FROM portada 
					WHERE status != 0 ";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectPortada(int $idportada){
			$this->intIdportada = $idportada;
			$sql = "SELECT * FROM portada
					WHERE idportada = $this->intIdportada";
			$request = $this->select($sql);
			return $request;
		}

		public function updatePortada(int $idcategoria, string $categoria, string $descripcion, string $portada, string $ruta, int $status){
			$this->intIdportada = $idcategoria;
			$this->strNombre = $categoria;
			$this->strDescripcion = $descripcion;
			$this->strPortada = $portada;
			$this->strRuta = $ruta;
			$this->intStatus = $status;

			$sql = "SELECT * FROM portada WHERE nombre = '{$this->strNombre}' AND idportada != $this->intIdportada";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE portada SET nombre = ?, descripcion = ?, portada = ?, ruta = ?, status = ? WHERE idportada = $this->intIdportada ";
				$arrData = array($this->strNombre, 
								 $this->strDescripcion, 
								 $this->strPortada,
								 $this->strRuta, 
								 $this->intStatus);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;			
		}


		public function deletePortada(int $idportada)
	{
		$this->intIdportada = $idportada;
		$sql = "UPDATE portada SET status = ? WHERE idportada = $this->intIdportada ";
		$arrData = array(0);
		$request = $this->update($sql,$arrData);
		return $request;
	}



		public function getCategoriasFooter(){
			$sql = "SELECT idcategoria, nombre, descripcion, portada, ruta
					FROM categoria WHERE  status = 1 AND idcategoria IN (".CAT_FOOTER.")";
			$request = $this->select_all($sql);
			if(count($request) > 0){
				for ($c=0; $c < count($request) ; $c++) { 
					$request[$c]['portada'] = BASE_URL.'/Assets/images/uploads/'.$request[$c]['portada'];		
				}
			}
			return $request;
		}


	}
 ?>