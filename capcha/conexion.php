<?php
$ServerName = "localhost";
    $UserName = "Fernadno";
    $password = "Pinturax0706";
    $DataBase = "capcha";

    $Vinculacion = new mysqli($ServerName, $UserName, $password, $DataBase);

    if($Vinculacion->connect_error)
    {

        die("Algo salio en la conexion con la base de datos" . $Vinculacion->connect_error);
        
    }

?>