<?php
session_start();
require_once 'config.php';

if (isset($_SESSION['professor_id'])) {
    header('Location: selecionar_turma.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM professores WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['professor_id'] = $row['id'];
        header('Location: selecionar_turma.php');
        exit();
    } else {
        $login_error = "Autenticação falhou. Por favor, tente novamente.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
</head>
<body>
    <h2>Tela de Login</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Nome de usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Entrar">
    </form>
    <?php if (isset($login_error)) { echo $login_error; } ?>
</body>
</html>
