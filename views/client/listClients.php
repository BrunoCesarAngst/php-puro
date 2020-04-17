<h2 class="center">Clientes</h2>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
      <th>Gênero</th>
      <th>Escolha</th>
      <th>Seleção</th>
      <th>Opção</th>
      <th>Texto</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($arrayClients as $item): ?>
			<tr>
				<td><?= isset($item["idClient"]) ? $item["idClient"] : null ?></td>
				<td><?= isset($item["name"]) ? $item["name"] : null ?></td>
				<td><?= isset($item["gender"]) ? $item["gender"] : null ?></td>
				<td><?= isset($item["choices"]) ? $item["choices"] : null ?></td>
				<td><?= isset($item["selection"]) ? $item["selection"] : null ?></td>
				<td><?= isset($item["options"]) ? $item["options"] : null ?></td>
				<td><?= isset($item["redaction"]) ? $item["redaction"] : null ?></td>
		<?php endforeach; ?>
	</tbody>
</table>

<a type="button" href="?c=cliente&metodo=criar" name="" id="" class="btn btn-primary" btn-lg btn-block">Adicionar Cliente</a>


