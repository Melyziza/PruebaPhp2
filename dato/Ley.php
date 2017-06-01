<?php
	include 'Conexion.php';
//Ejecucion de la sentencia SQL
   $resultado=mysqli_query($con,"SELECT IDLEY,
       NUMLEY,
       FECPUBLICACION,
       FECPROMULGACION,
       TITULO,
       FECHAHORA
FROM ley");
    

?>
<table align="center" BORDER="1">
<tr>
<th>Id Ley</th>
<th>Numero Ley</th>
<th>Fecha Publicacion</th>
<th>Fecha Promulgacion</th>
<th>Titulo</th>
<th>Fecha y Hora</th>
</tr>
<?php
//Mostramos los registros
while ($fila=mysqli_fetch_array($resultado,MYSQLI_BOTH))
{
	echo '<tr><td>'.$fila["IDLEY"].'</td>';
	echo '<td>'.$fila["NUMLEY"].'</td>';
	echo '<td>'.$fila["FECPUBLICACION"].'</td>';
	echo '<td>'.$fila["FECPROMULGACION"].'</td>';
	echo '<td>'.$fila["TITULO"].'</td></tr>';
        echo '<td>'.$fila["FECHAHORA"].'</td></tr>';
}
mysqli_free_result($resultado);
mysqli_close($con);
?>
</table>