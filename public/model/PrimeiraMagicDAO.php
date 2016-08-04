<?php
	require_once('DAO.php');

	class PrimeiraMagicDAO extends DAO{

		public function __construct($dbname){
			parent::__construct($dbname);
		}

		public function __call($method, $params){
			$p = [$this->dbname];
			$params = array_merge($p, $params);
			return call_user_func_array([$this->db, $method], $params);
		}
	}
?>