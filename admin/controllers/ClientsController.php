<?php 
    // Arquivo onde tem a classe Controller
    require_once('controllers/Controller.php');
    
    class ClientsController extends Controller {
        var $ClientModel;
        
        function __construct(){
            if(!isset($_SESSION["login"])) {
                header("Location: index.php?c=m&a=l");
            }
            require_once('models/ClientsModel.php');
            $this -> ClientModel = new ClientsModel();
        }

        public function index(){
            $this ->  listClients();
        }

        // public function listClients(){
        //     $result = $this->ClientModel->list();
        //     $this->templateData('views/client/listClient.php', $result);
        // }

        public function listClients(){

            $ClientModel = new ClientsModel();
            $ClientModel->list();
            $result = $ClientModel->getConsult();

            $arrayClients = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayClients, $line);
            }

            $this->templateData('views/client/listClient.php', $arrayClients);

        }
        
        public function insertClient(){
            $this -> template("views/client/createClient.php");
        }

        public function insertClientAction(){

            $client = array(
                "name" => $_POST['name'],
                "address" => $_POST['address'],
                "email" => $_POST['email'],
                "phone" => $_POST['phone'],
            );

            $this -> ClientModel -> insertClient($client);

            header("Location: ?c=c&m=i");
        }
        
        public function updateClient($idClient){
            $result = $this -> ClientModel -> consultClient($idClient);

            $result = $result -> fetch_assoc();

            $this -> templateData('views/client/updateClient.php', $result);
        }
        
        public function updateClientAction(){
            $client = array(
                "idClient" => $_POST['idClient'],
                "name" => $_POST['name'],
                "address" => $_POST['address'],
                "email" => $_POST['email'],
                "phone" => $_POST['phone'],
            );
            
            $this -> ClientModel -> updateClient($client);
            
            header("Location: ?c=c&m=i");
        }
        
        public function deleteCliente ($idClient){
            $this-> ClientModel -> deleteClient($_GET['idClient']);            
            // $this -> listClients();
            header("Location: ?c=c&m=i");
        }
    }
?>