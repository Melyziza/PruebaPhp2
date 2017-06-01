<HTML>
<HEAD>
<TITLE>Muestra Usuarios</TITLE>
</HEAD>
<BODY>
<H1 ALIGN='CENTER'>Listado de Usuarios</H1>
<TABLE BORDER='2' ALIGN='CENTER'><TR><TD>LOGIN</TD><TD>PASWORD</TD></TR>
<?php
$con=mysqli_connect("localhost","root","avaras08","leyes");
if (mysqli_connect_errno()) {
	printf("Conexion Fallo: %s\n", mysqli_connect_error());
	exit();
}
$sql="select * from usuario";
$miquery=mysqli_query($con,$sql);
 while($fila = mysqli_fetch_array($miquery)) {
   echo ("<TR><TD>".$fila['login']."</TD>");
   echo ("<TD>".$fila['pass']."</TD>");
   }
mysqli_close($con);
?>
</TABLE>
</BODY>
</HTML>
