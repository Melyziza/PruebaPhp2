<?php
	include 'Conexion.php';
	$sSQL="Select IDLEY From ley Order By IDLEY";
	$result=mysqli_query($con,$sSQL);
if ($fila = mysqli_fetch_array($result)):
?>
<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Ingreso de una Ley</TITLE>
</HEAD>
<BODY align="center">
<H1>Ingreso De Una Ley</H1>
<FORM METHOD="POST" ACTION="Agregar2.php" TARGET="central">
	<table>
		<tr>
		Ingrese El Id de la Ley: <input type="text"  name="idLey" />
		</tr>
		<tr>
		Ingrese El Numero de Ley: <input required type="text" name="numero" /><br>
		</tr>
		<tr>
		Ingrese la Fecha de Publicacion: <input type="text" name="fechaP" /><br>
		</tr>
		<tr>
                Ingrese la Fecha de Promulgacion: <input type="text" name="fechaPr" /><br>    
		</tr>
		<tr>
                Ingrese el Titulo: <input type="text" name="titulo" /><br> 
		</tr>
		<tr>
                Ingrese el la Fecha y la Hora: <input type="text" name="fechahora" /><br>
                </tr>
	<table>
	<hr>
	<input type="submit" value="Agregar" name="agregar"/></center>
</FORM>
</BODY>
</HTML>
<?php
else:
    echo "<BR><h1>Para agregar una ley tine que tener un Id Valido</h1>";
endif;
    echo "</center>";
    mysqli_close($con);
?>