<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Imprima todos os temos de uma P.A até  N informado pelo usuario</h2>
    
    <label for="termon">Numero</label>
    <input id="termon" type="number" name= "n" placeholder ="inisira o numero da sua P.A" value ="numero">
    <form action="submit">
        <input type="submit">

    <?php
    
    $a1=0;
    $r=3;
    $n = isset($_GET["n"])?$_GET["n"]:1;

    $i=1;

    $termon = 0;

    for ($i = 1; $i<=$n; $i++){
        echo "termo ".$termon;
        $termon += $r;
    }

    
    
    ?>
    
    
    </form>

</body>
</html>