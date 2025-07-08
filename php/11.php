<?php
function ehTrianguloValido($a, $b, $c) {
    return ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a);
}

function classificarTriangulo($a, $b, $c) {
    if (!ehTrianguloValido($a, $b, $c)) {
        return "Os valores fornecidos não formam um triângulo válido.";
    }

    if ($a == $b && $b == $c) {
        return "Triângulo Equilátero (todos os lados iguais).";
    } elseif ($a == $b || $b == $c || $a == $c) {
        return "Triângulo Isósceles (dois lados iguais).";
    } else {
        return "Triângulo Escaleno (todos os lados diferentes).";
    }
}

$lado1 = $lado2 = $lado3 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    $resultado = classificarTriangulo($lado1, $lado2, $lado3);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificar Triângulo</title>
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
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Classificar Triângulo</h1>

    <form method="POST" action="">
        <label for="lado1">Primeiro Lado:</label>
        <input type="number" id="lado1" name="lado1" required><br><br>

        <label for="lado2">Segundo Lado:</label>
        <input type="number" id="lado2" name="lado2" required><br><br>

        <label for="lado3">Terceiro Lado:</label>
        <input type="number" id="lado3" name="lado3" required><br><br>

        <input type="submit" value="Classificar Triângulo">
    </form>

    <?php
    if (isset($resultado)) {
        echo "<div class='result'>$resultado</div>";
    }
    ?>

</body>
</html>
