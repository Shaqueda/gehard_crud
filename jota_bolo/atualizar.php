<?php
include 'conexao.php';


$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];


$sql = "UPDATE bolos SET nome = ?, preco = ?, descricao = ? WHERE id = ?";


$stmt = $conexao->prepare($sql);


$stmt->bind_param("sdsi", $nome, $preco, $descricao, $id);


if ($stmt->execute()) {
    header("Location: index.php"); 
    exit();
} else {
    echo "Erro ao atualizar o bolo: " . $stmt->error;
}


$stmt->close();
$conexao->close();
?>