<?php
$number = '';
$table = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST['number']);
    
    $table = "<h3>Tabuada de $number:</h3><ul>";
    for ($i = 1; $i <= 10; $i++) {
        $table .= "<li>$number x $i = " . ($number * $i) . "</li>";
    }
    $table .= "</ul>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
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
        .table {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <h1>Gerar Tabuada</h1>

    <form method="POST" action="">
        <label for="number">Informe um número:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <input type="submit" value="Gerar Tabuada">
    </form>

    <?php
    if ($table) {
        echo "<div class='table'>$table</div>";
    }
    ?>

</body>
</html>
