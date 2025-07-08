<?php
$numero1 = $numero2 = '';
$intervalo = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2']);

    if ($numero1 > $numero2) {
        $temp = $numero1;
        $numero1 = $numero2;
        $numero2 = $temp;
    }

    for ($i = $numero1; $i <= $numero2; $i++) {
        $intervalo[] = $i;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo de Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 50px;
        }
        form {
            margin-bottom: 30px;
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
        .intervalo {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
        .numero {
            background-color: #f2f2f2;
            color: #333;
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
        }
    </style>
</head>
<body>

    <h1>Informe um Intervalo de Números</h1>

    <form method="POST" action="">
        <label for="numero1">Primeiro Número:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Segundo Número:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <input type="submit" value="Gerar Intervalo">
    </form>

    <?php
    if (!empty($intervalo)) {
        echo "<div class='intervalo'>";
        foreach ($intervalo as $numero) {
            echo "<span class='numero'>$numero</span>";
        }
        echo "</div>";
    }
    ?>

</body>
</html>
