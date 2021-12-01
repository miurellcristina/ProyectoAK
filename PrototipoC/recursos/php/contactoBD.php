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
    
/* Datos recibidos*/
$destinatario = "rock.animefan@gmail.com"; 
$nombre=$_POST["mombre"];
$empresa=$_POST["empresa"];
$tel=$_POST["tel"];
$WS=$_POST["WS"];
$mail=$_POST["mail"];
$estado=$_POST["estado"];
$ciudad=$_POST["ciudad"];
$comentario=$_POST["comentario"];
$contenido = "
    La empresa  $empresa ha enviado una solicitud de contacto. La información proporcionada es la siguiente:\n
              Nombre: $nombre.\n
              Teléfono: $tel.\n
              Whatsapp: $WS.\n 
              Correo: $mail.\n 
              Estado: $estado.\n 
              Ciudad: $ciudad.\n 
              Mensaje personal: $comentario.\n 
";

if(mail($destinatario,"La empresa .$empresa. ha solicitado información adicional",$contenido )){
    if(!empty($_POST)){
        $sql="INSERT INTO `comentarios` (`nombre`, `empresa`, `tel`, `ws`, `mail`, `estado`, `ciudad`, `comentario`) 
        VALUES ('.$nombre.', '.$empresa', '.$tel.', '.$WS.', '.$mail.', '.$estado.', '.$ciudad.', '.$comentario.');";
        $accion=mysqli_query($con,$sql);
        
        if($accion){
            header ("location:../../index.php");

        }
        else{
            echo"Error al eliminar";
        }
        
    }
    

}
else{
    echo 'algo salio mal';
}
?>
