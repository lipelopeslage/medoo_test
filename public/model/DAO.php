<?php
	require_once('./../vendor/medoo.php');

	class DBConnect{

		public static function connect(){
			$database = new medoo([
				'database_type' => 'mysql',
			    'database_name' => 'teste',
			    'server' => 'localhost',
			    'username' => 'root',
			    'password' => '',
			    'charset' => 'utf8'
			]);
			return $database;
		}
	}

	class DAO{
		protected $db;
		protected $dbname;
		public function __construct($dbname){
			$this->db = DBConnect::connect();
			$this->dbname = $dbname;
			return $this->db;
		}
	}
?>