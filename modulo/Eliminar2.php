<?php
	include 'Conexion.php';
	$rut = $_POST['IDLEY'];
	
	$sql="SELECT * FROM persona WHERE IDLEY='".$idley."';";
	$resultado=mysqli_query($con,$sql);
	echo"<center>";
if ($fila = mysqli_fetch_array($resultado)):


	$sql="DELETE FROM ley WHERE IDLEY='".$idley."';";

/* Sentencia que ejecuta múltiples sentencias SQL
	$con->multi_query($sql);
*/
	$resultado=mysqli_query($con,$sql);
	echo"<center>";
	echo "<BR>La consulta en la BD es: ",$sql;
else:
	echo "<BR><h1>No Existe Ley Con Ese Id!</h1>";
endif;
	echo "</center>";
	mysqli_close($con);
?>
