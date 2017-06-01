<?php
	include 'Conexion.php';
        $idley=$_POST["$idley"];
	$numLey=$_POST["numLey"];
	$fechaP=$_POST["fechaP"];
	$fechaPr=$_POST["fechaPr"];
	$titulo=$_POST["titulo"];
        $fechaHora=$_POST["fechaHora"];

//Ejecucion de la sentencia SQL
   $sql="insert into ley(idley,numLey,fechaP,fechaPr,titulo,fechaHora) "
      . "values ('".$idley."','".$numLey."','".$fechaP."',".$fechaPr.",".$titulo."',".$fechaHora.")";
   $resultado=mysqli_query($con,$sql);
   echo"<center>";
   echo "<BR>La consulta en la BD es: ",$sql;
mysqli_close($con);

?>
<H1>Ingreso De La Ley Exitoso</H1>
