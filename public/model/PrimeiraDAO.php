<?php 
	require_once('DAO.php');

	class PrimeiraDAO extends DAO{

		public function __construct($dbname){
			parent::__construct($dbname);
		}

		public function select(...$args){
			if(isset($args[1])):
				return $this->db->select($this->dbname, $args[0], $args[1]);
			else:
				return $this->db->select($this->dbname, $args[0]);
			endif;
		}

		public function insert($data){
			$this->db->insert($this->dbname, $data);
		}

		public function delete($where){
			$this->db->delete($this->dbname, $where);
		}

		public function update($where, $replacement){
			$this->db->update($this->dbname, $where, $replacement);
		}
	}
?>