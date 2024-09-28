<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastrar Produto</h1>
        <form action="index.php?action=cadastrar" method="POST">
            <label for="nome">Nome do Produto:</label>
            <input type="text" name="nome" required>

            <label for="descricao">Descrição do Produto:</label>
            <textarea name="descricao" required></textarea>

            <label for="valor">Valor do Produto:</label>
            <input type="number" step="0.01" name="valor" required>

            <label for="disponivel">Disponível para venda:</label>
            <select name="disponivel">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>
        <br>
        <a href="index.php?action=listar">Voltar para a listagem</a>
    </div>
</body>
</html>
