<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: principal.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuario_valido = 'admin';
    $senha_valida = '1234';

    if ($usuario === $usuario_valido && $senha === $senha_valida) {
        $_SESSION['usuario'] = $usuario;
        header("Location: principal.php");
        exit();
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Simples</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    <form method="POST">
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
