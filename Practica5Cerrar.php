<?php
// inicia sesión
$_SESSION['codigo'];
session_destroy();
header("Location:Practica5.php");
?>