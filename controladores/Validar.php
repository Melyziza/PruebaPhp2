<?php
include 'Conexion.php'; 
$usuario = $_POST['user'];
$pass = md5($_POST["pass"]);
$sql="SELECT * FROM usuario WHERE login='".$usuario."' AND pass='".$pass."'";

$resultado=mysqli_query($con,$sql);

if (($resultado->num_rows)>= 1):
	session_start();
	$_SESSION['usuario'] = $usuario;
	header("Location: index.php");
else:
?>
<html> 
<head><title>Login</title></head>
	<body>
		<div><center>
			<h2>Ingreso</h2>
			<form method="POST" action="Asignacion.php">
			<table>
			<tr>
			<td><input type="text" required name="user" placeholder="Usuario"/></td>
			</tr>
			<tr>
			<td><input type="password" required name="pass" placeholder="Contraseña" /></td>
			</tr>
			</table>
			<button type="submit">Entrar</button>
			</form>
	</body>
</html>
<?php
	echo "<script language=JavaScript>alert('El usuario y/o contraseña son incorrectos.');</script>";
endif;
	echo "</center>";
	mysqli_close($con);
 
?>