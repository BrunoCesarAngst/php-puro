<h2 class="center">Produto</h2>
<table>
    <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Tipo</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= $item["name"] ?></td>
                <td><?= $item["preco"] ?></td>
                <td><?= $item["descricao"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
