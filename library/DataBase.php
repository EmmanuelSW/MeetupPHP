<?php 

	
	/**
	* 
	*/
	class DataBase
	{
		private static $con;

		private function DataBase(){}

		public static function getConnection(){
			$dns = DRIVER.":host=".HOST.";dbname=".NAMEDB;

			if(self::$con == null){
				self::$con = new PDO($dns, USER, PASS);
			}
			return self::$con;
		}

	}

 ?>