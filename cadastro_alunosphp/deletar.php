<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Aluno excluído com sucesso!";
    header("Location: index.php");
} else {
    echo "Erro ao excluir: " . $conn->error;
}

$conn->close();
?>