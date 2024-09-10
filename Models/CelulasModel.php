<?php 
class CelulasModel extends Mysql
{
	
	public function __construct()
	{
		parent::__construct();
	}	

    public function selectCelulas()
	{
		$sql = "SELECT id, nombre, status, DATE_FORMAT(created_at, '%d/%m/%Y') AS fecha
        FROM celulas
        WHERE status != 0
        ORDER BY id DESC;
        ;
        ";
		$request = $this->select_all($sql);
		return $request;
	}
	
}

 ?>