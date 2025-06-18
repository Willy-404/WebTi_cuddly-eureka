<form action="2.php">
    <input type="color" name ="cor">
    <input type="numer" name="A">
    <input type="numer" name="B">

    <input type="submit">
</form>

<?php
/* programa que imprime a soma de dois bnumeros informados pelo usuario via get */

/* verificar se um 0parametro foi passado */
$A = 0;
$B = 0;

if (isset ($_GET["A"])){
    $A = $_GET["A"];
}if (isset($_GET["B"])){
    $B = $_GET["B"];
}



echo "A soma a e b é = ";
echo $A. "+" .$B. "=".$A+$B;


?>