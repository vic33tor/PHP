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
$nombreNuevo = $_POST['nombreNuevo'];
$mailNuevo = $_POST['mailNuevo'];

if($nombre == ""){
    $sql = "UPDATE usuario SET nombre = '$nombreNuevo', mail = '$mailNuevo'
    WHERE mail = '$mail'";
    $result = $conn->query($sql);
}elseif($mail == ""){
    $sql = "UPDATE usuario SET nombre = '$nombreNuevo', mail = '$mailNuevo'
    WHERE nombre = '$nombre'";
    $result = $conn->query($sql);
}else{
    $sql = "UPDATE usuario SET nombre = '$nombreNuevo', mail = '$mailNuevo'
    WHERE nombre = '$nombre' AND mail = '$mail'";
    $result = $conn->query($sql);
}

    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // mostramos los resultados por filas
        while($row = $result->fetch_assoc()) {
            echo "<br>" . "id: " . $row["ID"]. " - nombre: " . $row["nombre"]. " mail: " .
            $row["mail"]."<br>";
        }
    }



$conn->close();
?>