<?php
// db.php - Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname, 3307);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error . " - " . $conn->connect_errno);
} else {
    echo "Conexão bem-sucedida!";
}
?>

