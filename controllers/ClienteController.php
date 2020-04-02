<?php 
	// Arquivo onde tem a classe Controller
	require_once('controllers/Controller.php');
	require_once('models/ClienteModel.php');

	class ClienteController extends Controller {
		public function __construct(){
			$this->model = new ClienteModel();
		}
		public function index() {
			require_once('views/templates/header.php');
			require_once('views/client/client.php');
			require_once('views/templates/footer.php');
		}
		
		// public function create(){
		// 	$client = array(
		// 		"name" => $_POST['name'],
		// 		"pass" => $_POST['pass'],
		// 		"gender" => $_POST['gender'],
		// 		"choices" => $_POST['choices'],
		// 		"selection" => $_POST['selection'],
		// 		"options" => $_POST['options'],
		// 		"redaction" => $_POST['redaction']
		// 	);
		// 	$this->model->create($client);
		// 	//$this->template('views/site/produtos-servicos.php');
		// }

		function listClients(){
			require_once('models/ClienteModel.php');
			$client = new ClienteModel();
			$client -> listClients();
			$result = $client -> getsQuery();

			$arrayClients = array();
			while ($linha = $result -> fetch_assoc()) {
				array_push($arrayClients, $linha);
			}
			require_once('views/templates/header.php');
			require_once('views/client/listClients.php');
			require_once('views/templates/footer.php');
		}
		
		public function create() {
      $this->template('views/client/createClient.php');
    }
    public function edit() {
      $this->template('views/client/client.php');
    }
		
		// public function edit (){
		// 	$this->template('views/site/contatos.php');
		// }

		// public function delete (){
		// 	$this->template('views/site/sobre.php');
		// }
	}
?>