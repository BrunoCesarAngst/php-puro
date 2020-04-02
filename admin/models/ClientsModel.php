<?php
	// require_once('models/Model.php');

	class ClientsModel {
		var $result;

		public function list(){

			require_once('db/ConnectClass.php');
			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$conn = $Oconn -> getConn();
			$sql = "SELECT * FROM customers";
			$this -> result = $conn -> query($sql);
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
		public function consultClient ($idClient) {
			require_once('db/ConnectClass.php');
			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$conn = $Oconn -> getConn();
			$sql = "SELECT * FROM customers WHERE idClient = '".$idClient."';";
			$this -> result = $conn -> query($sql);
			return $this -> result;
		}
		public function insertClient($client){
			require_once('db/ConnectClass.php');
			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$conn = $Oconn -> getConn();
			$sql = "INSERT INTO customers (name, address, email, phone, photo) VALUES ('".$client['name']."', '".$client['address']."', '".$client['email']."', '".$client['phone']."', '".$client['photo']."' )";
			$this -> result = $conn -> select($sql);  
			return $this -> result;
		}

		public function updateClient ($client) {
			require_once('db/ConnectClass.php');
			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$conn = $Oconn -> getConn();
			$sql = "UPDATE customers SET name='".$client['name']."', address='".$client['address']."', email='".$client['email']."', phone='".$client['phone']."', photo='".$client['photo']." WHERE idClient='".$client['idClient']."'";
			$this -> result = $conn -> select($sql);  
			return $this -> result;
		}

		public function deleteClient ($idClient) {
			require_once('db/ConnectClass.php');
			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$conn = $Oconn -> getConn();
			$sql = "DELETE FROM customers WHERE idClient='".$idClient."'";
			$this -> result = $conn -> select($sql);  
			return $this -> result;
		}

	}
?>
