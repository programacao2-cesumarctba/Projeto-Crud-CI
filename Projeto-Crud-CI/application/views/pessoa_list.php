<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>
</head>
<body>
    <h1>Listagem de Produtos</h1>   
    <hr>
    <a href="/produto/cadastraProdutoView">Cadastrar</a>
    <table border=1>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>-</th>
            <th>-</th>
        </thead>
        <tbody>
            <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= $p->id ?></td>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->preco ?></td>
                    <td><a href="/produto/editaProdutoView?id=<?= $p->id ?>">Editar</a></td>
                    <td><a href="/produto/excluir?id=<?= $p->id ?>">Excluir</a></td>
                </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</body>
</html>