<?php if (isset( $data["idClient"])):?>
  <input name="idClient" type="text" value="<?= $data["idClient"]?>" readonly>
<?php endif;?>

  <div class="row">
    <div class="input-field col s12">
      <input name="name"  type="text" class="validate" value="<?= isset($data["name"])? $data["name"] : null?>">
      <label for="first_name">Nome</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <input name="address" type="text" class="validate" value="<?= isset($data["address"])? $data["address"] : null?>">
      <label for="address">Endereço</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <input name="email" type="email" class="validate" value="<?= isset($data["email"]) ? $data["email"] : null?>">
      <label for="email">Email</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <input name="phone" type="text" class="validate" value="<?= isset($data["phone"])? $data["phone"] : null?>">
      <label for="phone">Telefone</label>
    </div>
  </div>
  <div class="row">
    
    <div class="file-field input-field col s8">
      <div class="btn"></div></div></div>
        <span>Foto</span>
          <input name="photo" type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  <?php if(isset($data['photo'])){ ?>
    <img class="col s4"src="<?=$data['photo']?>" style="max-width:100px; max-height:100px;">
  <?php }?>
  </div>
  <button class="btn waves-effect waves-light right green darken-1 btn-small" type="submit" name="action">
    Salvar
  </button>