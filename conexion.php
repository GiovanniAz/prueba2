<?php
$servername = "localhost"; // Cambia esto por la dirección de tu servidor MySQL
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = ""; // Cambia esto por tu contraseña de MySQL
$dbname = "Seguros"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener las marcas
$sql = "SELECT marca FROM marca";
$result = $conn->query($sql);

// Generar opciones del menú desplegable
$options = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $options .= '<a href="#" onclick="selectOption(\'' . $row["marca"] . '\')">' . $row["marca"] . '</a>';
    }
} else {
    echo "No se encontraron marcas en la base de datos.";
}

// Cerrar conexión
$conn->close();
?>
