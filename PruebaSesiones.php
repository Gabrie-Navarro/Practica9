<?php
// inicia sesión
session_start();

?>
<?php
$codigo = $_POST['codigo'];
$contra = $_POST['contra'];

if ($codigo == "100" && $contra == "udg") {

$_SESSION['codigo']= $codigo;
header("Location:Practica5Directorio.php");
	# code...
} else {
	header("Location:Practica5.php");

	# code...
}
?>