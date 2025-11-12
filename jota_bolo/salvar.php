<?php

include 'conexao.php';


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];


$sql = "INSERT INTO bolos (nome, preco, descricao) VALUES (?, ?, ?)";


$stmt = $conexao->prepare($sql);


$stmt->bind_param("sds", $nome, $preco, $descricao);


if ($stmt->execute()) {
    
    header("Location: index.php");
    exit(); // Encerra o script
} else {
    echo "Erro ao salvar o bolo: " . $stmt->error;
}


$stmt->close();
$conexao->close();
?>