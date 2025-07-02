<?php
    session_start();

    if (isset($_SESSION['usr'])){
        header("Location:rota.php");
    }
    echo $_SESSION['usr'];
?>