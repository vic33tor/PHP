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
$id = $_POST['id'];

if($nombre == "" && $mail == ""){
    $sql = "DELETE FROM usuario WHERE id = '$id'";
    $result = $conn->query($sql);
}elseif($nombre == "" && $id == ""){
    $sql = "DELETE FROM usuario WHERE mail = '$mail'";
    $result = $conn->query($sql);
}elseif($mail == "" && $id == ""){
    $sql = "DELETE FROM usuario WHERE nombre = '$nombre'";
    $result = $conn->query($sql);
}
else{
    echo "No se ha borrado ningún usuario";
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
