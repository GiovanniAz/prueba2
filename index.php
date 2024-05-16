<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Botón Desplegable Filtro</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dropdown">
        <button onclick="toggleDropdown()" class="dropbtn">Selecciona una opción</button>
        <div id="myDropdown" class="dropdown-content">
          <?php echo $options; ?>
        </div>
      </div>
      
<script src="script.js"></script>
</body>
</html>
