<html>
<body>
<?php
if( empty($_POST['apellidos']) )
                $aMensaje = "Debe especificar los apellidos";
            else
            {
               $aMensaje = $_POST["apellidos"];
            }
?>
NOMBRE: <?php echo $_POST["nombre"]; ?><br><br>
APELLIDO: <?php echo $aMensaje; ?><br><br>
EDAD: <?php echo $_POST["edad"]." "; ?><br><br>
DNI: <?php echo $_POST["dni"]; ?><br><br>
CORREO ELECTRONICO: <?php echo $_POST["correo"]; ?><br><br>
PAGINA WEB: <?php echo $_POST["pagina"]; ?><br><br>
GUSTOS: <?php echo $_POST["gustos"]; ?><br><br>
</body>
</html>