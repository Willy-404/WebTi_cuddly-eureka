<?php
$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Passo 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 50px;
        }
        input[type="number"] {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Cadastro - Passo 2</h1>
    <form method="POST" action="9-Pagina3.php">
        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.1" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>

</body>
</html>
