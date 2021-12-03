<?php
//Conexion
    $servername = "localhost";
    $username = "Admin";
    $password = "N7R1R0nD662IfuUG";
    $dbname = "ak";
                    
        $con= mysqli_connect($servername, $username, $password, $dbname) or die ("No se pudo conectar");
        mysqli_select_db ($con, $dbname) or die ("No se pudo seleccionar BD"); 

            if (!$con){
                echo "Error en coneccion: ".$mysqli_connect_error();
                exit;
}
?>