<?php

class Usuario
{
    var $idusuario;
    var $nombre;
    var $clave;
    
    /*Valida la existencia del usuario*/
    function VerificaUsuario() 
    {
        $oConn=new Conexion();
        if($oConn->conectar())
        $db=$oConn->objconn;
        else 
        return false;
    
        
    $sql="SELECT * FROM usuario WHERE nomusu='$this->nombre'";

    $resultado=$db->query($sql);
    
    if($resultado->num_rows>=1)
            return true;
    else
            return false;
    }
    
    function VerificaUsuarioClave() 
    {
        $oConn=new Conexion();
        if($oConn->conectar())
        $db=$oConn->objconn;
        else 
        return false;
    
    $clavemd5= md5($this->clave);    
    $sql="SELECT * FROM usuario WHERE nomusu='$this->nombre' and pwdusuario='$clavemd5'";

    $resultado=$db->query($sql);
    
    if($resultado->num_rows>=1)
            return true;
    else
            return false;
    }
}