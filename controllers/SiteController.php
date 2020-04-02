<?php 
    // Arquivo onde tem a classe Controller
    require_once('controllers/Controller.php');

    class SiteController extends Controller {
        public function index (){
            $this->template('views/site/home.php');
        }
        
        public function product (){
            $this->template('views/site/produtos-servicos.php');
        }
        
        public function contact (){
            $this->template('views/site/contatos.php');
        }

        public function about (){
            $this->template('views/site/sobre.php');
        }
    }
?>