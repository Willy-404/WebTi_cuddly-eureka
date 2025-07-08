<?php
$host = "localhost";
$usuario = "root";
$senha = "aluno";
$banco = "sistema";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background: #f5f5f5;
        }
        h2 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .mensagem {
            text-align: center;
            margin-top: 30px;
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>

    <h2>Lista de Usuários Cadastrados</h2>

    <?php if ($resultado->num_rows > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
            <?php while ($linha = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo htmlspecialchars($linha['nome']); ?></td>
                    <td><?php echo htmlspecialchars($linha['email']); ?></td>
                    <td><?php echo htmlspecialchars($linha['telefone']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <div class="mensagem">Nenhum usuário encontrado na tabela.</div>
    <?php endif; ?>

    <?php $conn->close(); ?>

</body>
</html>
