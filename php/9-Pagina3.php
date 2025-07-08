<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$peso = isset($_POST['peso']) ? $_POST['peso'] : 0;
$altura = isset($_POST['altura']) ? $_POST['altura'] : 0;

if ($altura > 0) {
    $imc = $peso / ($altura * $altura);
    $imcFormatado = number_format($imc, 2, ',', '.');
} else {
    $imcFormatado = 'Altura inválida';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 50px;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Resultado do Cálculo de IMC</h1>
    
    <div class="result">
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>E-mail:</strong> <?php echo $email; ?></p>
        <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
        <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
        <p><strong>IMC:</strong> <?php echo $imcFormatado; ?></p>
    </div>

</body>
</html>
