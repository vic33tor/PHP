<?php
require("Alumno.php");
    //datos de conexión
$servername = "localhost";
$username = "testuser";
$password = "testpassword";
$dbname = "test";
// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobamos la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión correcta"."<br>";

$alumnado = array();

$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // mostramos los resultados por filas
    while($row = $result->fetch_assoc()) {
        array_push($alumnado, new Alumno($row["Nombre"], $row["Apellido1"], $row["Apellido2"], $row["DNI"]));
    }
} else {
    echo "0 results";
}
foreach ($alumnado as $alumno) {
    echo $alumno -> mostrarAlumnos();
    echo "<br>";
}
$conn->close();
?>