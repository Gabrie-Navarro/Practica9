<?php 
	if(!isset($_POST['txtNombre'])){
?>
<?php
// inicia sesión
session_start();
?>

<html>
  <head>
	<title>Ver</title>
  </head>
<?php
echo "<form method='post' action='Practica5Cerrar.php'><label id=lblusu> ".$_SESSION['codigo']."</label><input type='submit' id='cerrarsesion' name='cerrarsesion' value='Logout' size='50'></form>";
?>  
  <body>
  
<?php
}else{
$nombre = $_POST['txtNombre'];
$paterno = $_POST['txtPaterno'];
$materno = $_POST['txtMaterno'];
$telefono = $_POST['txtTelefono'];
$celular = $_POST['txtCelular'];
$domicilio = $_POST['txtDomicilio'];
echo "<h5>Name:</h5> <label>".$nombre."</label>";
echo "<h5>Apellido Paterno:</h5> <label>".$paterno."</label>";
echo "<h5>Apellido Materno:</h5> <label>".$materno."</label>";
echo "<h5>Phone:</h5> <label>".$telefono."</label>";
echo "<h5>Cellular:</h5> <label>".$celular."</label>";
echo "<h5>Adress:</h5> <label>".$domicilio."</label>";
?>

<br/>
<br/>

	
<a href="Practica5Directorio.php">Back</a><form method="POST" action="Practica5.php">
	
		
</body>
</html>
<?php

// Crear conexión a la Base de Datos
$conexion = mysql_connect('localhost','root','think');
if (!$conexion) {
die("Fallo la conexión a la Base de Datos: " . mysql_error());
}
// Seleccionar la Base de Datos a utilizar
$seleccionar_bd = mysql_select_db("Datos", $conexion);
if (!$seleccionar_bd) {
die("Fallo la selección de la Base de Datos: " . mysql_error());
}

// Insertar campos en la Base de Datos (No inserto el id_ya que se genera automaticamente)
$q = "INSERT INTO php (nombre, ApPaterno, ApMaterno, telefono, celular, domicilio) 
VALUES ('".$nombre."', '".$paterno."', '".$materno."', '".$telefono."', '".$celular."', '".$domicilio."')";
$insertar = mysql_query($q, $conexion);
if (!$insertar) {
die("Fallo en la insercion de registro en la Base de Datos:". mysql_error());
}
//4. Cerrar conexión a la Base de Datos
mysql_close($conexion);
}
?>
