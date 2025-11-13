<?php


session_start();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];
    header("Location: bienvenida.php");
} else {
    echo "Faltan datos. <a href='login.php'>Volver</a>";
}
?>