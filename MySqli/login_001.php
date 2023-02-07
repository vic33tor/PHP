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
$passwd = $_POST['passwd'];

    $sql = "SELECT * FROM usuario WHERE nombre='$nombre'AND passwd='$passwd'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Inicio de sesión correcto, bienvenido $nombre <br/>";
        echo '<form action="./form_ej8.html">
        <input type="submit" value="LOG OUT">
        </form>';
    } else {
        echo "No existe ese usuario";
    }


$conn->close();
?>