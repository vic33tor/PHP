<?php
    //datos de conexión
$servername = "localhost";
$username = "testuser";
$password = "testpassword";
$dbname = "test";
// Creamos la conexión
try{
    $dsn = "mysql:host=$servername;dbname=$dbname";
    $conn = new PDO($dsn, $username, $password);

    foreach($conn ->query("SELECT * FROM productos")as $fila){
        print_r("Nombre: ".$fila["Nombre"] . " Cantidad: ".$fila["Cantidad"]. "<br/>");
    }

    $conn = null;
}catch(PDOException $e){
    echo "Error: ". $e->getMessage();
    die();
}
?>