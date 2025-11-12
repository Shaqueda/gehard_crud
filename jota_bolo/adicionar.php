<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Novo Bolo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Adicionar Novo Bolo</h2>

    <form action="salvar.php" method="POST">
        <label for="nome">Nome do Bolo:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" min="0" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4"></textarea>

        <button type="submit" class="btn">Salvar Bolo</button>
    </form>

    <br>
    <a href="index.php">Voltar para a lista</a>

</body>
</html>