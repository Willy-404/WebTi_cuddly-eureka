<?php
$string = '';
$tamanho = '';
$palindromo = '';
$numeroVogais = 0;
$numeroConsoantes = 0;

function isPalindromo($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str === strrev($str);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = trim($_POST['string']);
    
    $tamanho = strlen($string);
    
    $palindromo = isPalindromo($string) ? "Sim, é um palíndromo!" : "Não, não é um palíndromo.";
    
    $vogais = "aeiouAEIOU";
    $consoantes = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
    
    for ($i = 0; $i < $tamanho; $i++) {
        $char = $string[$i];
        if (strpos($vogais, $char) !== false) {
            $numeroVogais++;
        } elseif (strpos($consoantes, $char) !== false) {
            $numeroConsoantes++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar String</title>
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
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Verifique a String</h1>

    <form method="POST" action="">
        <label for="string">Informe uma string:</label>
        <input type="text" id="string" name="string" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($string) {
        echo "<div class='result'>";
        echo "<p><strong>Tamanho da string:</strong> $tamanho</p>";
        echo "<p><strong>É um palíndromo?</strong> $palindromo</p>";
        echo "<p><strong>Número de vogais:</strong> $numeroVogais</p>";
        echo "<p><strong>Número de consoantes:</strong> $numeroConsoantes</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
