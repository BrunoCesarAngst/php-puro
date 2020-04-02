<?php
  if(!isset($_GET['c'])){
    require_once('controllers/SiteController.php');
    $controller = new SiteController();
    $controller->index();
  } else {
    switch($_REQUEST['c']){
      case 's' :
        require_once('controllers/SiteController.php');
        $controller = new SiteController();
        switch($_REQUEST['a']){
          case 'h': $controller->index(); break;
          case 'p': $controller->product(); break;
          case 's': $controller->about(); break;
          case 'f': $controller->contact(); break;  
        }
      break;
      case 'cliente' : 
        require_once('controllers/ClienteController.php');
        util(new ClienteController());
      break;
      case 'produto' : 
        require_once('controllers/ProdutoController.php');
        util(new ProdutoController());
      break;
    }
  }

  function util ($controllers) { 
    switch($_REQUEST['metodo']){
      case 'mostra': $controllers->index(); break;
      case 'lista': $controllers->listClients(); break;
      case 'criar': $controllers->create(); break;
      case 'editar': $controllers->edit(); break;
      case 'delete': $controllers->delete(); break;
    }
  }
?>