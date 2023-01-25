<?php
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

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];


$sql = "INSERT INTO usuario (nombre, mail) VALUES ('$nombre', '$mail')";

if($conn->query($sql) === TRUE) {
    echo "<br>" . "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // mostramos los resultados por filas
    while($row = $result->fetch_assoc()) {
        echo "<br>" . "id: " . $row["ID"]. " - nombre: " . $row["nombre"]. " mail: " .
        $row["mail"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>