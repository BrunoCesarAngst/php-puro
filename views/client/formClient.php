<?php if (isset( $data["id_cliente"])):?>
  <input name="id_client" type="text" value="<?= $data["id_cliente"]?>" hidden>
<?php endif;?>

<div class="row">
  <div class="col-sm">
    <div class="form-group">
      <label for="name">Nome</label>
      <input 
        type="text" 
        class="form-control" 
        name="name" 
        value="<?= isset($data["name"])? $data["name"] : null?>"
      >
    </div>

    <div class="form-group">
      <label for="pass">Senha</label>
      <input 
        type="password" 
        class="form-control" 
        name="pass" 
        id="pass"
        value="<?= isset($data["pass"])? $data["pass"] : null?>"
      >
    </div>
  </div>

  <div class="col-sm">
    <div class="row">
      <legend>Escolha seu sexo:</legend>

      <div class="form-check">
        <label class="form-check-label">
          <input 
            type="radio" 
            class="form-check-input" 
            name="gender" 
            id="gender1" 
            value="Masculino<?= isset($data["Masculino"])? $data["Masculino"] : null?>" 
            checked
          >
          Masculino
        </label>
        <br/>
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="gender2" value="Feminino<?= isset($data["Feminino"])? $data["Feminino"] : null?>">
          Feminino
        </label>
      </div>        
    </div>
    
  </div>
  <div class="col-sm">
    <legend>Escolha:</legend>

    <div class="form-check form-check-inline">

      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="choice01" id="choice01" value="sim<?= isset($data["sim"])? $data["sim"] : null?>"> Sim
      </label>
      
    </div>

    <div class="form-check form-check-inline">
      
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="choice02" id="choice02" value="não<?= isset($data["não"])? $data["não"] : null?>"> Não
      </label>
      
    </div>

    <div class="form-check form-check-inline">
      
      <label class="form-check-label">        
        <input class="form-check-input" type="checkbox" name="choice03" id="choice03" value="talvez<?= isset($data["talvez"])? $data["talvez"] : null?>"> Talvez
      </label>

    </div>
  </div>
</div>  

<div class="col-sm">
  <div class="row">
    <div class="col-sm">

      <label>Selecione 01<br />
        <select name=selection >
          <option></option>
          <option value=”carro<?= isset($data["carro"])? $data["carro"] : null?>”>Carro</option>
          <option value=”moto<?= isset($data["moto"])? $data["moto"] : null?>”>Moto</option>
          <option value=”bicicleta<?= isset($data["bicicleta"])? $data["bicicleta"] : null?>”>Bicicleta</option>
        </select>
      </label>

    </div>

    <div class="col-sm">
      <label>Selecione 02<br />    
        <select name="options" size="4" multiple="yes">
          <option></option>
          <option value=”rápido<?= isset($data["rápido"])? $data["rápido"] : null?>”>Rápido</option>
          <option value=”normal<?= isset($data["normal"])? $data["normal"] : null?>”>Normal</option>
          <option value=”lento<?= isset($data["lento"])? $data["lento"] : null?>”>Lento</option>
        </select>
      </label>
    </div>
  </div>

</div>

<div class="col-sm">
  <div class="form-group">
    <label for="escrever">Escreva:</label>
    <textarea class="form-control" name="redaction" id="redaction" rows="3" value=”<?= isset($data["redaction"])? $data["redaction"] : null?>></textarea>
  </div>
</div>  


<button
  type="submit"
  class="btn btn-primary"
  href="?c=cliente&metodo=mostra" 
  >
  Enviar
  </button>