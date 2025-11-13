<?php

if (isset($_COOKIE['contador'])) {
    $visitas = $_COOKIE['contador'] + 1;
    setcookie('contador', $visitas, time() + (86400 * 365)); // 1 año
    echo "<h2>Has visitado esta página $visitas veces.</h2>";
} else {
    setcookie('contador', 1, time() + (86400 * 365)); // Primera vez
    echo "<h2>Bienvenido por primera vez a la página.</h2>";
}
?>