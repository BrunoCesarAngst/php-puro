<?php 
    // Arquivo onde tem a classe Controller
    require_once('controllers/Controller.php');
    require_once('models/ClientsModel.php');

    class ClientsController extends Controller {
        public function __construct(){
            if(!isset($_SESSION["login"])) {
                header("Location: ?c=m&a=l");
            }
            $this -> ClientModel = new ClientsModel();
        }
        public function index (){
            $result = $this->ClientModel->list();
            $this->templateData('views/client/listClient.php', $result);
        }
        
        public function insertClient (){
            $this -> template("views/client/createClient.php");
        }

        public function insertClientAction(){

            $client = array(
                "name" => $_POST['name'],
                "address" => $_POST['address'],
                "email" => $_POST['email'],
                "phone" => $_POST['phone'],
                "photo" => "assets/img/".$_POST['phone'].".jpg"
            );

            if(isset($_FILES['photo'])) {
                $this -> saveFile($_FILES['photo'], $client['phone']);
            }

            $this -> ClientModel -> insertClient ($client);
            
            header("Location: ?c=c&m=i");
        }
        
        public function updateClient($idClient){
            $result = $this->ClientModel->consultClient($idClient);
            $result = $result->fetch_assoc();
            $this->templateData('views/client/updateClient.php', $result);
        }

        public function updateClientAction(){
            $client = array(
                "idClient" => $_POST['idClient'],
                "name" => $_POST['name'],
                "address" => $_POST['address'],
                "email" => $_POST['email'],
                "phone" => $_POST['phone'],
                "photo" => "assets/img/".$_POST['phone'].".jpg"
            );

            if(isset($_FILES['photo'])) {
                $this -> saveFile($_FILES['photo'], $client['phone']);
            }
            
            $this -> ClientModel -> updateClient($client);

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