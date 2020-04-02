<?php 
	class ClienteModel {
		var $result;

		// Vai ser chamado no ClienteController
		public function listClients() {

			require_once('db/ConnectClass.php');
			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$conn = $Oconn -> getConn();
			$sql = 'SELECT * FROM customers';
			$this -> result = $conn -> query($sql);
		}
							
		// Vai ser chamado no ClienteController
		public function getsQuery() {

			return $this -> result;
		}
	}
?>