<html>
<head>

</head>
<body>
<?php if(!isset($_POST["id"])){ 

	$id = $_GET["id"];
	$iden = mysql_connect("localhost", "root", "think");

// seleccionado la base de datos

if(!mysql_select_db("Datos", $iden))
    die("Error: No existe la base de datos"); 
    
	$q="SELECT * FROM php WHERE ide='".$id."'";

	$re = mysql_query($q, $iden) or die ("problema con query");
	$registro = mysql_fetch_assoc($re);
   //cerrar base de datos	
	mysql_close($conexion);

// avisando


echo "Editar Registro";

?>

<form method="post" action="Ver2.php">
	<input type="hidden" id="id" name="id" value="<?php echo $registro["ide"]; ?>" >
	<label id="lblNombre">Name</label><br/>
	<input type="text" id="nombre" name="txtNombre" value="<?php echo $registro["nombre"]; ?>" required ><br/><br/>
	
	<label id="lblNombre">Apellido Paterno</label><br/>
	<input type="text" id="aP" name="txtPaterno" value="<?php echo $registro["ApPaterno"]; ?>" required ><br/><br/>
	
	<label id="lblNombre">Apellido Materno</label><br/>
	<input type="text" id="aM" name="txtMaterno" value="<?php echo $registro["ApMaterno"]; ?>" required ><br/><br/>

	<label id="lblTelefono">Phone</label><br/>
	<input type="text" id="tel" name="txtTelefono" value="<?php echo $registro["telefono"]; ?>" required><br/><br/>

	<label id="lblCelular">Cellular</label><br/>
	<input type="text" id="cel" name="txtCelular" value="<?php echo $registro["celular"]; ?>" required><br/><br/>
	
	<label id="lblDomicilio">Adress</label><br/>
	<input type="text" id="domicilio" name="txtDomicilio" value="<?php echo $registro["domicilio"]; ?>" required><br/><br/><br/>

	<input type="submit" id="guardar" name="guardar" value="Save">
		
	</form>

<?php 

}else{
$nombre = $_POST['txtNombre'];
$paterno = $_POST['txtPaterno'];
$materno = $_POST['txtMaterno'];
$telefono = $_POST['txtTelefono'];
$celular = $_POST['txtCelular'];
$domicilio = $_POST['txtDomicilio'];


 $iden = mysql_connect("localhost", "root", "think");

// seleccionado la base de datos

if(!mysql_select_db("Datos", $iden))
    die("Error: No existe la base de datos"); 

// preparando la instruccion sql

$q = "UPDATE php set nombre='".$nombre."', ApPaterno=".$paterno.", ApMaterno=".$materno.", telefono=".$telefono.", celular=".$celular.", domicilio=".$domicilio." where ide=".$id;

// ejecutando el query

mysql_query($q, $iden) or die ("problema con query");

// avisando

echo "Registro Editado";
}
?>
</body>
</html>