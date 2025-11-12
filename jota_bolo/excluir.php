<?php
include 'conexao.php';


$id = $_GET['id'];


$sql = "DELETE FROM bolos WHERE id = ?";


$stmt = $conexao->prepare($sql);


$stmt->bind_param("i", $id);


if ($stmt->execute()) {
    header("Location: index.php"); 
    exit();
} else {
    echo "Erro ao excluir o bolo: " . $stmt->error;
}


$stmt->close();
$conexao->close();
?>