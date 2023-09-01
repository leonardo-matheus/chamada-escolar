<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
</head>
<body>
    <h2>Tela de Login</h2>
    <form method="post" action="auth.php">
        <label for="username">Nome de usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
