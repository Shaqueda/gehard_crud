<?php
include 'conexao.php';

// 1. Pegar o ID da URL
$id = $_GET['id'];

// 2. Criar o SQL para buscar o bolo
$sql = "SELECT * FROM bolos WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id); // i = integer
$stmt->execute();

// 3. Obter o resultado
$resultado = $stmt->get_result();

// 4. Verificar se encontrou o bolo
if ($resultado->num_rows > 0) {
    $bolo = $resultado->fetch_assoc();
} else {
    echo "Bolo não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Bolo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Editar Bolo: <?php echo htmlspecialchars($bolo['nome']); ?></h2>

    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $bolo['id']; ?>">

        <label for="nome">Nome do Bolo:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($bolo['nome']); ?>" required>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" min="0" value="<?php echo $bolo['preco']; ?>" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4"><?php echo htmlspecialchars($bolo['descricao']); ?></textarea>

        <button type="submit" class="btn">Atualizar Bolo</button>
    </form>

    <br>
    <a href="index.php">Voltar para a lista</a>

</body>
</html>

<?php
$stmt->close();
$conexao->close();
?>