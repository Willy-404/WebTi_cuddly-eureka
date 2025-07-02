<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="rota.php?rota=autenticacao" method ="post">
        <label for="email">Login</label>
        <input type="email" id="email" name="login">

        <label for="senha">Senha</label>
        <input type="senha" id="senha" name="senha">

        <input type="submit" value="autenticar">


    </form>
</body>
</html>

<?php



?>