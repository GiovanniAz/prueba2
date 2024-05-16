<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Seguros";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT marca FROM marca";
$result = $conn->query($sql);


$options = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $options .= '<a href="#" onclick="selectOption(\'' . $row["marca"] . '\')">' . $row["marca"] . '</a>';
    }
} else {
    echo "No se encontraron marcas en la base de datos.";
}

$conn->close();
?>
