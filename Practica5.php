	<html>
  <head>
	<title>Sesion</title>
  </head>
  <body>
<form method="POST" action="PruebaSesiones.php">
	
	<h2>Enter Code and Password</h2> <br/>
		<label id="lblcodigo">Code</label><br/>
		<input type="text" name="codigo" id="txtcodigo" size="20" maxlength="3" required><br/><br/>
		<label id="lblcontraseña">Password</label><br/>
		<input type="password" name="contra" id="pass" size="20" maxlength="3" required><br/><br/>
		<input type="submit" name="btnenviar" value="Log In" required>

	</form>
</body>
</html>