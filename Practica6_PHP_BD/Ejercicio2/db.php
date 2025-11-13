<?php
// db.php - Conexión a la base de datos
$host = "localhost";
$user = "entornosGraficos";
$pass = "entornos2025";
$dbname = "capitales";

$link = mysqli_connect($host, $user, $pass, $dbname)
  or die("Error al conectar: " . mysqli_connect_error());
