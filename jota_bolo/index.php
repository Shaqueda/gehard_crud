<?php

include 'conexao.php';


$sql = "SELECT * FROM bolos ORDER BY nome";


$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>🍰 Loja de Bolos da Tia Zilda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>🍰 Gerenciador da Loja de Bolos</h1>

    <a href="adicionar.php" class="btn">Adicionar Novo Bolo</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Bolo</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
        
            if ($resultado->num_rows > 0) {
                
                while ($bolo = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $bolo['id'] . "</td>";
                    echo "<td>" . htmlspecialchars($bolo['nome']) . "</td>";
                    echo "<td>R$ " . number_format($bolo['preco'], 2, ',', '.') . "</td>";
                    echo "<td>" . htmlspecialchars($bolo['descricao']) . "</td>";
                    echo "<td>";
                    echo "<a href='editar.php?id=" . $bolo['id'] . "' class='edit'>Editar</a>";
                    
                    echo "<a href='excluir.php?id=" . $bolo['id'] . "' class='delete' onclick='return confirm(\"Tem certeza que deseja excluir este bolo?\")'>Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum bolo cadastrado ainda.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

<?php

$conexao->close();
?>