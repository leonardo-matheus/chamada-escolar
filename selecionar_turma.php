<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['professor_id'])) {
    header('Location: login.php');
    exit();
}

// Aqui você deve buscar as turmas disponíveis no banco de dados e exibi-las como opções em um formulário.
// Cada opção terá um valor que corresponde ao ID da turma.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Selecionar Turma</title>
</head>
<body>
    <h2>Selecionar Turma</h2>
    <form method="post" action="lista_alunos.php">
        <label for="turma">Escolha uma turma:</label>
        <select id="turma" name="turma" required>
            <!-- Opções da turma serão preenchidas aqui -->
        </select><br><br>
        <input type="submit" value="Selecionar">
    </form>
</body>
</html>
