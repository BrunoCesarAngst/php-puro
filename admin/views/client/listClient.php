<h2 class="center">Clientes</h2>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach($data as $item): ?>
            <tr>
                <td><?= $item["idClient"] ?></td>
                <td><?= $item["name"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["phone"] ?></td>
                <td> 
                    <a href="?c=c&a=u&idClient=<?= $item["idClient"]?>" class="waves-effect waves-light blue darken-1 btn">ATUALIZAR</a>
                    <a href="?c=c&a=d&idClient=<?= $item["idClient"]?>" class="waves-effect waves-light red darken-1 btn">DELETAR</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<div class="fixed-action-btn">
    <a class="btn-floating btn-large red" href="?c=c&a=c">
        <i class="large material-icons waves-effect waves-light green darken-1">add</i>
    </a>
</div>
