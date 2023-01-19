<html>
<body>
Hola <?php echo $_POST["nombre"]; ?><br><br>
Tus estudios son: <?php echo $_POST["educacion"] ?><br><br>
Tu genero es: <?php echo $_POST["genero"] ?><br><br>
Tu nacionalidad es: <?php echo $_POST["nacionalidad"] ?><br><br>
Tus idiomas son: <?php  foreach($_POST['idiomas'] as $selected){
echo $selected." ";
}?><br><br>
Tu email es: <?php echo $_POST["email"]; ?><br><br>
Tu direcion es: <?php echo $_POST["direccion"]; ?><br><br>
</body>
</html>