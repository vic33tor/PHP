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

$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$fecha = $_POST['fecha'];
$aux = $_POST['aux'];

$sql = "SELECT nombre, contraseña FROM usuarios WHERE nombre='$nombre'AND contraseña='$contraseña'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Ya hay un usuario con ese nombre y contraseña";
}else{

$sql = "INSERT INTO usuarios (nombre, contraseña, fecha, aux) VALUES ('$nombre', '$contraseña', '$fecha', '$aux')";

if($conn->query($sql) === TRUE) {
    echo "<br>" . "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
