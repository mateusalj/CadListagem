<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Produtos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                        <td>R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button class="add-new" onclick="window.location.href='index.php?action=cadastrar'">Cadastrar Novo Produto</button>
    </div>
</body>
</html>
