<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['professor_id'])) {
    header('Location: login.php');
    exit();
}

$turma_id = $_POST['turma'];

// Aqui você pode buscar a lista de alunos da turma selecionada no banco de dados e exibi-los em uma tabela.
// Cada linha da tabela terá o número do aluno, nome completo e um botão para marcar a presença.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alunos</title>
</head>
<body>
    <h2>Lista de Alunos</h2>
    <table>
        <tr>
            <th>Número do Aluno</th>
            <th>Nome Completo</th>
            <th>Presença</th>
        </tr>
        <!-- Linhas da tabela com alunos e botão de presença serão preenchidas aqui -->
    </table>
</body>
</html>
