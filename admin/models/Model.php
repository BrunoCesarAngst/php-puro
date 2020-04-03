<?php 
	require_once('db/ConnectClass.php');

	class Model {
		public function __construct(){
			$this -> db = new ConnectClass();
		}
		
		public function select($sql){
			$banco = $this -> db ->ini_conn();
			
			$result = $banco -> query($sql);
			
			$this->db -> end_conn();
			
			return $result;
			
		}
	}
?>