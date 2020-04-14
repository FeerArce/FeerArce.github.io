<?php
	session_start();
	if(!isset($_SESSION["usuario"]))
	header("Location: login.php");
?>
<html>
<body>

<form action="dir_alta_procesa.php" method="post">
	Nombre: <input type="text" name="nombre"><br>
	Correo: <input type="text" name="correo"><br>
	Celular: <input type="text" name="celular"><br>
<input type="submit">
</form>

</body>
</html>