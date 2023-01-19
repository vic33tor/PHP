<?php
//datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AccesoUsuarios";
// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobamos la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión correcta"."<br>";

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // mostramos los resultados por filas
    while($row = $result->fetch_assoc()) {
        echo "<br>" . "nombre: " . $row["nombre"]. " - Contraseña: " . $row["contraseña"]. " Fecha: " .
        $row["fecha"]. " aux: ". $row["aux"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
