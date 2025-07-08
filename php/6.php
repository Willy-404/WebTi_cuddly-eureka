<?php
$number = '';
$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST['number']);
    
    if ($number % 2 == 0) {
        $result = "O número $number é Par.";
    } else {
        $result = "O número $number é Ímpar.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par ou Ímpar</title>
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
        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Verifique se o Número é Par ou Ímpar</h1>

    <form method="POST" action="">
        <label for="number">Informe um número:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($result) {
        echo "<div class='result'>$result</div>";
    }
    ?>

</body>
</html>
