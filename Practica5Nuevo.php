
<html>
  <head>
	<title>Nuevo</title>
  </head>
<?php
echo "<form method='post' action='Practica5Cerrar.php'><label id=lblusu> ".$_SESSION['codigo']."</label><input type='submit' id='csesion' name='cerrarsesion' value='Logout' size='50'></form>";
?>  
	

  <body>
<h2>New Contact</h2>  
  
<form method="post" action="Practica5Ver.php">
	<label id="lblNombre">Name</label><br/>
	<input type="text" id="nombre" name="txtNombre" value="" required ><br/><br/>
	
	<label id="lblNombre">Apellido Paterno</label><br/>
	<input type="text" id="aP" name="txtPaterno" value="" required ><br/><br/>
	
	<label id="lblNombre">Apellido Materno</label><br/>
	<input type="text" id="aM" name="txtMaterno" value="" required ><br/><br/>

	<label id="lblTelefono">Phone</label><br/>
	<input type="text" id="tel" name="txtTelefono" value="" required><br/><br/>

	<label id="lblCelular">Cellular</label><br/>
	<input type="text" id="cel" name="txtCelular" value="" required><br/><br/>
	
	<label id="lblDomicilio">Adress</label><br/>
	<input type="text" id="domicilio" name="txtDomicilio" value="" required><br/><br/><br/>

	<input type="submit" id="guardar" name="guardar" value="Save">
		
	</form>

	
</body>
</html>
