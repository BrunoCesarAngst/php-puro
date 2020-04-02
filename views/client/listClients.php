<h2 class="center">Clientes</h2>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
      <th>Sexo</th>
      <th>Escolha</th>
      <th>Seleção</th>
      <th>Opção</th>
      <th>Texto</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($arrayClients as $item): ?>
			<tr>
				<td><?=$item["idClient"] ?></td>
				<td><?=$item["name"] ?></td>
				<td><?=$item["gender"] ?></td>
				<td><?=$item["choices"] ?></td>
				<td><?=$item["selection"] ?></td>
				<td><?=$item["options"] ?></td>
				<td><?=$item["redaction"] ?></td>
		<?php endforeach; ?>
	</tbody>
</table>

<a type="button" href="?c=cliente&metodo=criar" name="" id="" class="btn btn-primary" btn-lg btn-block">Adicionar Cliente</a>


