<?php 
	/**
	* 
	*/
	class Wine
	{
		private $db;
		private $id;
		private $name;
		private $year;
		private $grapes;
		private $description;

		public function __SET($atributo, $valor){
			$this->$atributo = $valor;
		}

		public function __GET($atributo){
			return $this->$atributo;
		}

		function __construct()
		{
			$this->db = DataBase::getConnection();
		}

		public function save(){
			$sql = "call SP_GuardarWine(?,?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->name);
			$stm->bindParam(2, $this->year);
			$stm->bindParam(3, $this->grapes);
			$stm->bindParam(4, $this->description);
			return $stm->execute();
		}

		public function read(){
			$sql = "SELECT * FROM wine";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}


	}


 ?>