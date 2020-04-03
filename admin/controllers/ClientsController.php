<?php 
    // Arquivo onde tem a classe Controller
    require_once('controllers/Controller.php');
    
    class ClientsController extends Controller {
        var $ClientModel;
        
        public function __construct(){
            if(!isset($_SESSION["login"])) {
                header("Location: ?c=m&a=l");
            }
            require_once('models/ClientsModel.php');
            $this -> ClientModel = new ClientsModel();
        }

        public function index(){
            $this ->  listClients();
        }

        public function listClients(){
            $result = $this->ClientModel->list();
            $this->templateData('views/client/listClient.php', $result);
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

            $idClient = $this -> ClientModel -> insertClient($client);
            
            if(isset($_FILES['photo'])) {
                $this -> saveFile($_FILES['photo'], $idClient );
                // var_dump($idClient);
            }
            
            header("Location: ?c=c&m=i");
        }
        
        public function updateClient($idClient){
            $results = $this -> ClientModel -> consultClient($idClient);

            var_dump($results);
            
            $result = $results -> fetch_assoc();

            var_dump($result);

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
            
            $idClient = $this -> ClientModel -> insertClient($client);


            if(isset($_FILES['photo'])) {
                $this -> saveFile($_FILES['photo'], $idClient);
            }
            

            $this -> listClients();

            header("Location: ?c=c&m=i");
        }

        public function deleteCliente (){
            if ($_GET['idClient'])
                $this-> ClientModel -> deleteClient($_GET['idClient']);
            if ($_GET['phone'])
                unlink('assets/img/'.$_GET['phone'].'.jpg');
            header("Location: ?c=c&m=i");
        }
    }
?>