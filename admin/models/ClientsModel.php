<?php
	require_once('models/Model.php');

	class ClientsModel {
		var $result;
		var $conn;

		function __construct() {			
			require_once('db/ConnectClass.php');
			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$this -> conn = $Oconn -> getConn();
		}

		public function list(){
			$sql = "SELECT * FROM customers";
			return $this -> result = $this -> conn -> query($sql);			
		}   

		public function consultClient($idClient) {
			
			$sql = "SELECT * FROM customers WHERE idClient = ".$idClient.";";
			return $this -> result = $this -> conn -> query($sql);
		}

		public function insertClient($client){			
			$sql = "INSERT INTO customers (name, address, email, phone) VALUES ('".$client['name']."', '".$client['address']."', '".$client['email']."', '".$client['phone']."');";
			$this -> conn -> query($sql);
			return $this -> conn -> insert_id;
		}

		public function updateClient($client) {		
			$sql = "UPDATE customers SET name='".$client['name']."', address='".$client['address']."', email='".$client['email']."', phone='".$client['phone']."' WHERE idClient ='".$client['idClient']."'";
			return $this -> result = $this -> conn -> query($sql);  
		}

		public function deleteClient($idClient) {
			$sql = "DELETE FROM customers WHERE idClient='".$idClient."'";
			return $this -> conn -> query($sql);  
		}

		public function getConsult() {
			return $this -> result;
		}
	}
?>
