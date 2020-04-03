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
			$this -> result = $this -> conn -> query($sql);
			$arrayCliente = array();
							
			if($this -> result -> num_rows > 0){
					while($linha = $this -> result -> fetch_assoc()){
							array_push($arrayCliente, $linha);
					}
			} else {
					echo "0 results";
			}
			return $arrayCliente;
		}   

		public function consultClient($idClient) {
			
			$sql = "SELECT * FROM customers WHERE idClient = ".$idClient.";";
			$this -> result = $this -> conn -> query($sql);
			var_dump($sql);
			var_dump($this -> result);
		}

		public function insertClient($client){
			
			$sql = "INSERT INTO customers (name, address, email, phone) VALUES ('".$client['name']."', '".$client['address']."', '".$client['email']."', '".$client['phone']."')";
			$this -> conn -> query($sql);
			return $this -> conn -> insert_id;
		}

		public function updateClient($client) {
		
			$sql = "UPDATE customers SET name='".$client['name']."', address='".$client['address']."', email='".$client['email']."', phone='".$client['phone']."' WHERE idClient='".$client['idClient']."'";
			$this -> result = $this -> conn -> query($sql);  
		}

		public function deleteClient($idClient) {

			$sql = "DELETE FROM customers WHERE idClient='".$idClient."'";
			$this -> result = $this -> conn -> query($sql);  
		}

		public function getConsult() {
			return $this -> result;
		}
	}
?>
