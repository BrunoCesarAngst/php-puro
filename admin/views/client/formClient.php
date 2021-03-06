<?php if (isset( $data["idClient"])):?>
  <input name="idClient" type="text" value="<?= $data["idClient"]?>" readonly>
<?php endif;?>

  <div class="row">
    <div class="input-field col s12">
      <input name="name"  type="text" placeholder="Nome" class="validate" value="<?= isset($data["name"])? $data["name"] : null?>">
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <input name="address" type="text" placeholder="Endereço" class="validate" value="<?= isset($data["address"])? $data["address"] : null?>">
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <input name="email" type="email" placeholder="Email" class="validate" value="<?= isset($data["email"]) ? $data["email"] : null?>">
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <input name="phone" type="text" placeholder="Telefone" class="validate" value="<?= isset($data["phone"])? $data["phone"] : null?>">
    </div>
  </div>
  <div class="row">

  <div class="file-field input-field col s8">
      <div class="btn">
        <span>photo</span>
          <input name="photo" type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
    <?php if(isset($data['photo'])){ ?>
      <img
        class="col s4"
        src="<?=$data['photo']?>"
        style="max-width:100px; max-height:100px;"
      >
    <?php }?>
  </div>
    
  <button class="btn waves-effect waves-light right green darken-1 btn-small" type="submit" name="action">
    Salvar
  </button>