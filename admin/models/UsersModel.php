<?php 
	class UsersModel {
		var $result;

		function __construct() {
			require_once("db/ConnectClass.php");
		}

		public function consultUser($login) {

			$Oconn = new connectClass();
			$Oconn -> openConnect();
			$sql = " SELECT * FROM users WHERE name='".$login."'";
			$conn = $Oconn -> getConn();			
			$this -> result = $conn -> query($sql);
		}
							
		public function getsQuery() {
			return $this -> result;
		}
	}
?>