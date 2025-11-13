<?php

$host = "localhost";
$user = "entornosGraficos";
$pass = "entornos2025";
$dbname = "prueba";

$link = mysqli_connect($host, $user, $pass, $dbname)
  or die("Error al conectar: " . mysqli_connect_error());