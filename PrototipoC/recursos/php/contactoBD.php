<?php 
include 'conexion.php';   
/* Datos recibidos*/
$destinatario = "rock.animefan@gmail.com"; 
$nombre=$_POST["mombre"];
$empresa=$_POST["empresa"];
$tel=$_POST["tel"];
$WS=$_POST["WS"];
$mail=$_POST["mail"];
$estado=$_POST["estado"];
    $sql = "SELECT * FROM estados WHERE ID_entidad= $estado or estado= $estado";
    if($resultado=mysqli_query($con,$sql)){
        while($registro=mysqli_fetch_row($resultado)){
            $estado=$registro[1];
            $idestado=$registro[0];
        }
    }
    else{
            echo "No se pudo ejecutar la consulta a la BD";
    }
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
        VALUES ('$nombre', '$empresa', $tel, $WS, '$mail', '$idestado', '$ciudad', '$comentario');";
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
