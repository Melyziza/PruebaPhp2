
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div><center>
                        
        <div id=nombre>"El bueno de Saul"</div>
        <br>
        <div id=saludo>-------------Bienvenido!-------------</div>
        <br>
        <br>   
        <div> 
        
        <form action="Validar.php" method="post" >
            <div><label>Usuario:</label><input type="text" name="nombre"></div>
            <div><label>Clave:</label><input type="text" name="clave"></div>
            <input type="submit" value="Acceder">
        </form>
        
    </body>
</html>