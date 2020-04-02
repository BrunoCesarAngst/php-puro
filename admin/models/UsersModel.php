<?php 
	class UsersModel {
		var $result;

		public function consultUser($login) {

			require_once('db/ConnectClass.php');
			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$conn = $Oconn -> getConn();
			$sql = " SELECT * FROM users WHERE name='".$login."' "; 
			
			$this -> result = $conn -> query($sql);
		}
							
		public function getsQuery() {

			return $this -> result;
		}
	}
?>