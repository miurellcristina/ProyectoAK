<?php include '../recursos/php/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>AK</title>
            <!--Etiquetado--> 
                <meta charset="UTF-8">
                <meta name="keywords" content="verificacion, basculas, profeco, cetificacion">
                <meta name="description" content="Somo una unidad tipo c, que realiza inspecciones de primera,segunda o ambas partes a básculas de bajo, medio y alto alcance hasta 200, 0000 kg en toda la republica mexicana.">
                <meta name="author" content="karumychan">
            <!--Estilos--> 
                <link rel="stylesheet" href="../recursos/css/contacto.css">
                <link rel="stylesheet" href="../recursos/css/menu.css">
                <link rel="stylesheet" href="../recursos/css/font.css">
                <link rel="icon" href="../recursos/img/favicon.ico">
                
    </head>
    <body>
        <?php include '../recursos/php/encabezado.php';?>
	        <div class="cont-wrap">
		<div class="cont-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Escribenos</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Contactanos</label>
		<div class="cont-form">
			<div class="sign-in-htm">
				<form action="../recursos/php/contactoBD.php" method="post">
					<div class="group"><br><br>
						<label class="label">Nombre:</label>
						<input id="mombre"  name="mombre" autocomplete="off" type="text" class="input" required>
					</div>
					<div class="group">
						<label  class="label">Nombre de la empresa:</label>
						<input id="empresa" name="empresa" autocomplete="off" type="text" class="input" required>
					</div>
					<div class="group">
						<label class="label">Teléfono (10 dígitos)</label>
						<input id="tel" name="tel" pattern="[0-9]+" maxlength="10" autocomplete="off" type="tel" class="input" >
					</div>
					<div class="group">
						<label class="label">Whatsapp (10 dígitos)</label>
						<input id="WS" name="WS" pattern="[0-9]+" maxlength="10" autocomplete="off" type="tel" class="input" >
					</div>
					<div class="group">
						<label class="label">Correo electrónico</label>
						<input id="mail" name="mail" autocomplete="off" type="mail" class="input" required>
					</div>
					<div class="group">
						<label class="label">Estado:</label>
						<?php
							$sql = "SELECT * FROM estados";
								if($resultado=mysqli_query($con,$sql)){
									echo '<select required name="estado" id= "estado" class="input" >';
									echo '<option selected="true" disabled="true">Seleccione</option>';
										while($registro=mysqli_fetch_row($resultado)){
											echo '<option value="'.$registro[0].'">'.$registro[1].'</option>';
										}
										
										echo "</select>";
								}
								else{
										echo "No se pudo ejecutar la consulta a la BD";
								}
						?>
					</div>
					<div class="group">
						<label class="label">Ciudad:</label>
						<input id="cuidad" name="ciudad" autocomplete="off" type="text" class="input" required >
					</div>
					<div class="group">
						<label class="label">¿Cómo podemos ayudarle?</label>
						<input id="comentario" name="comentario" autocomplete="off" type="text" class="input" required>
					</div>
					<div class="hr"></div><br>
					<div class="center">
						<input type="submit" class="button" value="Enviar">
					</div>
				</form>
			</div>
			<div class="sign-up-htm">
				<div class="group"><br><br>
					<label class="titulo">Escribenos tus dudas al correo electrónico:</label><br>
					<label class="texto">cotizaciones.akverificación@gmail.com</label><br><br>
				</div>
				<div class="group">
					<label class="titulo">Desde Mexicali:</label><br>
					<label class="texto">686 479 8440</label><br><br>
				</div>
				<div class="group">
					<label class="titulo">Escribenos por Whatsapp</label><br>
					<label class="texto">55 8025 8389</label><br><br>
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div><?php
$sql = 'SELECT * FROM estados WHERE 2';
    if($resultado=mysqli_query($con,$sql)){
        while($registro=mysqli_fetch_row($resultado)){
            echo '<option value="'.$registro[0].'">'.$registro[1].'</option>';
            $estado=$registro[1];
        }
            
            echo "</select>";
    }
    else{
            echo "No se pudo ejecutar la consulta a la BD";
    }?>
  
  </body>
</html>
