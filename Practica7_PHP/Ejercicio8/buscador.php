<?php
include("db.php");

$resultados = [];
if (isset($_GET['query'])) {
  $q = mysqli_real_escape_string($link, $_GET['query']);
  $sql = "SELECT * FROM buscador WHERE canciones LIKE '%$q%'";
  $res = mysqli_query($link, $sql);

  while ($fila = mysqli_fetch_assoc($res)) {
    $resultados[] = $fila['canciones'];
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Buscador de Canciones</title>
</head>
<body>
  <h2>Buscador de Canciones</h2>
  <div class="search-form">
    <form method="get" action="">
      <input type="text" name="query" placeholder="Ingrese el nombre de la canción..." 
             value="<?= isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '' ?>" required>
      <input type="submit" value="Buscar">
    </form>
  </div>

  <?php if (isset($_GET['query'])): ?>
    <div class="results">
      <h3>Resultados para: "<?= htmlspecialchars($_GET['query']) ?>"</h3>
      <?php if (count($resultados) > 0): ?>
        <p>Se encontraron <?= count($resultados) ?> coincidencia(s):</p>
        <ul>
          <?php foreach ($resultados as $cancion): ?>
            <li><?= htmlspecialchars($cancion) ?></li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p style="color: #6c757d;">No se encontraron canciones que coincidan con su búsqueda.</p>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</body>
</html>