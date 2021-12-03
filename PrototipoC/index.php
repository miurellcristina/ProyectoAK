<!DOCTYPE html>
<html lang="es">
  <head>
  <title>AK</title>
    <?php include './recursos/php/global.php';?> 
    <!--Etiquetado--> 
      <meta charset="UTF-8">
      <meta name="keywords" content="verificacion, basculas, profeco, cetificacion">
      <meta name="description" content="Somo una unidad tipo c, que realiza inspecciones de primera,segunda o ambas partes a básculas de bajo, medio y alto alcance hasta 200, 0000 kg en toda la republica mexicana.">
      <meta name="author" content="karumychan">
    <!--Estilos--> 
      <link rel="stylesheet" href="./recursos/css/menu.css">
      <link rel="stylesheet" href="./recursos/css/principal.css">
      <link rel="stylesheet" href="./recursos/css/font.css">
      <link rel="icon" href="./recursos/img/favicon.ico">
  </head>
  <body>
  <header class="header">
     <div class="container">
                    
            <!--Menu fijo con opciones de direccionamiento-->
            <nav class="navigation">
                <div ><a href="../index.php"> </a></div>
                <ul class="show">
                     <!--Pagina principa;-->
                    <li><a href="index.php">Inicio</a></li>     

                     <!--Información de la empresa-->
                     <li><a href="./contenido/nosotros.php">Nosotros</a></li>  
                    
                    <!--Información de la verificación-->
                    <li><a href="./contenido/inspeccion.php">Inspección</a></li>         
                    
                    <!--Información de entidades que respaldan a la empresa-->
                    <li><a href="./contenido/validacion.php">¿Quién nos valida?</a></li>   
                    
                    <!--Muestrario de clientes-->   
                    <li><a href="./contenido/clientes.php">Nuestros Clientes</a></li>
                    
                    <!--Opciones para contactar--> 
                    <li><a href="./contenido/contaco.php"><i class="fas fa-user"></i> Contactanos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--Logo y datos de contacto-->
    <div class="contacto"> 
        <div class="logoEmpresa">
            <img class="logo" src="./recursos/IMG/logo.png">
        </div>
        <div class="Infomation">
                <b>Mayores Informes a:</b>
                <br><i class="fas fa-envelope"></i><b>cotizaciones.akverificación@gmail.com</b><br>
                <i class="fas fa-phone-alt"></i><b>686 479 8440</b><br>
                <i class="fab fa-whatsapp"></i><b>55 8025 8389</b><br> <br>               
        </div>
    </div>

    <main class="main">
      <div class="slider" id="slider">
        <section class="slider__section">
          <img class="slider__img" src="recursos/IMG/slider1.jpg" alt="">
        </section>
        <section class="slider__section"> 
          <img class="slider__img" src="recursos/IMG/slider2.jpg" alt="">
        </section>
        <section class="slider__section">
          <img class="slider__img" src="recursos/IMG/slider3.jpg" alt="">
        </section>
        <section class="slider__section">
          <img class="slider__img" src="recursos/IMG/slider2.jpg" alt="">
        </section>
      </div>
      <div class="btn-prev" id="btn-prev">&#60;</div>
      <div class="btn-next" id="btn-next">&#62;</div>
      
        
    </main>
    
    <!--Recursos--> 
      <script src="https://kit.fontawesome.com/20529a5ad9.js" crossorigin="anonymous"></script>
      <script src="recursos/js/jquery-1.2.6.min.js"></script>
      <script src="recursos/js/menu.js"></script>
      <script src="recursos/js/slider.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-61944772-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>