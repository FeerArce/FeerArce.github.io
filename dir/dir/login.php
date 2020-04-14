<html>
<body>

<form action="login_procesa.php" method="post">
	<h1>Directorio - Autenticación </h1>
	<?php
		if (isset($_SESSION["LoginError"]))
		{
			if($_SESSION["LoginError"] == 1)
			{
				echo "Error de autenticación<br>";
				$_SESSION["LoginError"] = 0;
			}
		}
	Usuario: <input type="text" name="usuario"><br>
	Password: <input type="password" name="password"><br>
	<input type="submit" value="Entrar">
</form>

</body>
</html>