<?php
  $name = ( isset($_POST['name']) ) ? $_POST['name'] : null;
  $pass = ( isset($_POST['pass']) ) ? $_POST['pass'] : null;
  $gender = ( isset($_POST['gender']) ) ? $_POST['gender'] : null;
  $choice01 = ( isset($_POST['choice01']) ) ? $_POST['choice01'] : null;
  $choice02 = ( isset($_POST['choice02']) ) ? $_POST['choice02'] : null;
  $choice03 = ( isset($_POST['choice03']) ) ? $_POST['choice03'] : null;
  $selection = isset($_POST['selection']) ? $_POST['selection'] : null;
  $options = isset($_POST['options']) ? $_POST['options'] : null;
  $redaction = ( isset($_POST['redaction']) ) ? $_POST['redaction'] : null;
?>

<h2 class="center">Cliente</h2>

<table class="table table-striped table-inverse table-responsive">
  <thead class="thead-inverse">
    <tr>
      <th>Nome</th>
      <th>Senha</th>
      <th>Sexo</th>
      <th>Escolha</th>
      <th>Seleção</th>
      <th>Opção</th>
      <th>Texto</th>
    </tr>
  </thead>
    <tbody>
      <tr>
        <td scope="row"><?php echo $name?></td>
        <td><?php echo $pass?></td>
        <td><?php echo $gender?></td>
        <td><?php echo $choice01." ".$choice02." ".$choice03?></td>
        <td><?php echo $selection?></td>
        <td><?php echo $options?></td>
        <td><?php echo $redaction?></td>
      </tr>
    </tbody>
</table>

<a type="button" href="?c=cliente&metodo=criar" name="" id="" class="btn btn-primary" btn-lg btn-block">Adicionar Cliente</a>