<?php
$host = "localhost";
$usuario = "root";
$senha = "aluno"; 
$banco = "sistema";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, telefone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $telefone);

    if ($stmt->execute()) {
        $mensagem = "Usuário inserido com sucesso!";
    } else {
        $mensagem = "Erro ao inserir: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px;
            text-align: center;
        }
        form {
            display: inline-block;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="text"], input[type="email"] {
            padding: 8px;
            width: 250px;
            margin: 10px 0;
        }
        input[type="submit"] {
            padding: 10px 25px;
            background: green;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .mensagem {
            margin-top: 20px;
            font-weight: bold;
            color: blue;
        }
    </style>
</head>
<body>

    <h2>Cadastro de Usuário</h2>

    <form method="POST" action="">
        <input type="text" name="nome" placeholder="Nome" required><br>
        <input type="email" name="email" placeholder="E-mail" required><br>
        <input type="text" name="telefone" placeholder="Telefone" required><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php if (!empty($mensagem)) : ?>
        <div class="mensagem"><?php echo $mensagem; ?></div>
    <?php endif; ?>

</body>
</html>
