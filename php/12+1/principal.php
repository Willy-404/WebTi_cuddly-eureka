<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Você está logado no sistema.</p>

    <form action="logout.php" method="POST">
        <input type="submit" value="Sair">
    </form>
</body>
</html>
