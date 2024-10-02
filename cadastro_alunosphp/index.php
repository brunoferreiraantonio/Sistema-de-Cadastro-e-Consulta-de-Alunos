<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cadastro de Alunos</h2>
    <form action="cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>
        
        <label for="idade">Idade:</label>
        <input type="number" name="idade" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="curso">Curso:</label>
        <input type="text" name="curso" required><br>
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
<?php
include 'db.php';

$sql = "SELECT id, nome, idade, email, curso FROM alunos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Nome</th><th>Idade</th><th>Email</th><th>Curso</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nome"]. "</td><td>" . $row["idade"]. "</td><td>" . $row["email"]. "</td><td>" . $row["curso"]. "</td>";
        echo "<td><a href='deletar.php?id=" . $row["id"] . "'>Excluir</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum aluno cadastrado.";
}
$conn->close();
?>