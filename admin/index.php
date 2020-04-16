<?php
  session_start();

  if(!isset($_GET['c'])){
    require 'controllers/MainController.php';
    $controller = new MainController();
    $controller->index();
  } else {
      switch($_REQUEST['c']){
        case 'm' :
          require_once('controllers/MainController.php');
          $controller = new MainController();
          
          if (!isset($_GET["a"])) {
            $controller -> index();
          } else {
            switch ($_GET["a"]) {
              case 'i' : $controller -> index(); break;
              case 'l' : $controller -> login(); break;
              case 'sd' : $controller -> sessionDestroy(); break;
            }
          }
        break;

        case 'u' : 
          require_once('controllers/UsersController.php');
          $User = new UsersController();
          
          if (!isset($_GET["a"])) {
            // $User -> index();
          } else {
            switch ($_GET["a"]) {
              case 'vl' : $User -> validateLogin(); break;
            }
          }
        break;

        
        case 'c' : 
          require_once('controllers/ClientsController.php');
          $controller = new ClientsController();
          
          if (!isset($_GET["a"])) {
            $controller -> index();
          } else {
            switch ($_REQUEST["a"]) {
              case 'i' : $controller -> index(); break;
              case 'ca' : $controller -> insertClientAction(); break;
              case 'c' : $controller -> insertClient(); break;
              case 'u' :  $idClient = $_GET["idClient"];  $controller -> updateClient($idClient); break;
              case 'ua' : $controller -> updateClientAction(); break;
              case 'd' : $idClient = $_GET["idClient"]; $controller -> deleteCliente($idClient); break;
            }
          }
        break;
      }
    }

?>