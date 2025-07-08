<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $min = intval($_POST['min']);
    $max = intval($_POST['max']);
    
    if ($min < $max) {
        $randomNumber = rand($min, $max);
        $message = "Número sorteado: " . $randomNumber;
    } else {
        $message = "O valor mínimo deve ser menor que o valor máximo!";
    }
} else {
    // Caso o formulário ainda não tenha sido enviado
    $message = "Digite um intervalo e clique em 'Sortear'.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Número Aleatório</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 30px;
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
        .message {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Sorteio de Número Aleatório</h1>

    <form method="POST" action="">
        <label for="min">Valor Mínimo:</label>
        <input type="number" id="min" name="min" required>
        <br><br>
        <label for="max">Valor Máximo:</label>
        <input type="number" id="max" name="max" required>
        <br><br>
        <input type="submit" value="Sortear">
    </form>

    <div class="message">
        <?php echo $message; ?>
    </div>

</body>
</html>
