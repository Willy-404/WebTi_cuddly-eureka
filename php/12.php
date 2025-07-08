<?php
function calcularArray($numeros) {
    $soma = array_sum($numeros);
    
    $maior = max($numeros);
    
    $menor = min($numeros);
    
    return [
        'soma' => $soma,
        'maior' => $maior,
        'menor' => $menor
    ];
}

$resultado = null;
$numeros = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = array_map('intval', explode(',', $_POST['numeros']));
    
    $resultado = calcularArray($numeros);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 50px;
        }
        input[type="text"] {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
            width: 300px;
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
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Calcular Números</h1>

    <form method="POST" action="">
        <label for="numeros">Informe os números (separados por vírgula):</label><br><br>
        <input type="text" id="numeros" name="numeros" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($resultado): ?>
    <div class="result">
        <p><strong>Array de Números:</strong> <?php echo implode(", ", $numeros); ?></p>
        <p><strong>Soma de todos os números:</strong> <?php echo $resultado['soma']; ?></p>
        <p><strong>Maior número:</strong> <?php echo $resultado['maior']; ?></p>
        <p><strong>Menor número:</strong> <?php echo $resultado['menor']; ?></p>
    </div>
    <?php endif; ?>

</body>
</html>
