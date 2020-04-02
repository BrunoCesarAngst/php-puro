<?php 
    // Arquivo onde tem a classe Controller
    require_once('controllers/Controller.php');
    require_once('models/ProdutoModel.php');

    class ProdutoController extends Controller {
        public function __construct(){
            $this->model = new ProdutoModel();
        }
        public function index (){
            $resultado = $this->model->lista();
            $this->templateData('views/site/produto/listaProduto.php', $resultado);
        }
        
        public function create (){
            $cliente = array(
                "nome" => $_POST['nome'],
                "login" => $_POST['login'],
                "sexo" => $_POST['sexo'],
                "textarea" => $_POST['textarea']
            );
            $this -> model -> create ($cliente);
            //$this->template('views/site/produtos-servicos.php');
        }
        
        public function edit (){
            $this->template('views/site/contatos.php');
        }

        public function delete (){
            $this->template('views/site/sobre.php');
        }
    }
?>