<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Portfolio</title>
  </head>
  <body>
    <div class="container-fluid">      
    <div class="row">
    <section class="col-md-11">
      <div class="navbar-nav row">
        <header class="col-md-12">                 
          <nav class="navbar navbar-expand fixed-top justify-content-end" id="1">
            <?php
              require_once('views/templates/nav.php');
            ?>
          </nav>
          <img class="avatar" src="assets/img/avatar.png" alt="Bruno">
          <q>Mude você e todo o resto mudará naturalmente!</q>
        </header>
      </div>