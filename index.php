<?php 

require_once'conexion.php';

require_once 'includes/helpers.php';

$pagina = "index";


 ?>
<!doctype html>                       <!-- http://www.conorvial.com.ar/wp/ ------------------>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Caballos</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  
  <!-- icoomoon -->
  <link rel="stylesheet" href="icomoon/style.css">
  <!--BOOSTRAP-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="theme-color" content="#fafafa">
  <!--aos-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fonts.css">
</head>

<body style="background: url(none)">
  <!-- HEADER -->
  
 <?php 

 include_once('includes/header.php');

  ?>
  <span class="ir-arriba icon-arrow-up"></span>
  <!--seccion central de fotos -->
  <section class="contenido1">
   
      <section class="CajaFotos">
        <div class="durmiendo">
          <div class="tituloImagen"><h4>¿Como duermen?</h4></div>
          <a href="http://www.mundo-animal.com/blog/caballos/comportamiento-caballos/como-duermen-los-caballos/" target="_blank"><img src="img/caballoDurmiendo.jpg" alt="caballo durmiendo"></a>
        </div>
        <div id="dosfotos">
          <div class="corriendo">
             <a href="https://www.noticaballos.com/cuanta-distancia-puede-recorrer-un-caballo.html" target="_blank"><img src="img/caballosCorriendo.jpg" class="fotosCentral" alt="caballos corriendo"></a>
          <div class="tituloImagen1">¿Cuanta pueden recorrer?</div>
          </div>
          <div class="reproduccion">
            <a href="https://www.noticaballos.com/%C2%BFcomo-es-la-reproduccion-de-un-caballo.html" target="_blank"><img src="img/caballoReproduccion.jpg" class="fotosCentral" alt="caballo reproducción"></a>
            <div class="tituloImagen2">¿Como es la reproducción?</div>
          </div>
        </div>
      </section>

    <!-- ASIDE -->
    <aside class="asideGeneral">
      <div class="aside">
        <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, facere.</a></h5>
        <img src="img/paisajeAsaide1.jpg" alt="">
      </div>
      <div class="aside">
        <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, facere.</a></h5>
        <img src="img/paisajeAsaide2.jpg" alt="">
      </div>
    </aside>
  </section>
  <!-- FOOTER -->
  <footer class="footer">
    <div class="minifooter">
      <div class="direccion">
        
          <h4>Ciudad de Bs. As</h4>
          <div class="texto">
            <span class="normal">Dirección:</span><br /><span class="bold">San martin 42422</span>
          </div>
          <div class="texto">
            <span class="normal">Tel:</span><br /><span class="bold">5555-5555</span>
          </div>
          <div class="texto">
            <span class="normal">Código Postal:</span><br /><span class="bold">3211</span>
          </div>
          <div class="texto">
            <span class="normal">Email</span><br /><img src="img/mail.png" alt="mail">
          </div>
        
      </div>
      <div class="newslatter">
          <div class="suscripcion">
            <h4>Suscripción a Newsletter</h4>
            <form action="" class="suscripcion2">
              <input type="checkbox" name="check">
              <label for="check">Suscribeme a la lista de correo!</label><br>
              
              <input type="email" placeholder="Su email" class="susc botonSus"><br/>
              <input type="submit" value="Suscribirse" class="susc" id="botonSus2">
            </form>
          </div>
           <div class="redesSociales">
              <h4>Siguenos en nuestras redes sociales</h4>
              <span class="icon-facebook"></span>
              <span class="icon-twitter"></span>
              <span class="icon-instagram"></span>
          </div>
      </div>
     
      <div class="formulario">
        <h4>Dejenos su mensaje</h4>
        <!-- <?php if (isset($_SESSION['errores'])) : ?>
          <?php var_dump($_SESSION['errores']); ?>
        <?php endif; ?> -->

        <!-- MOSTRAR ERRORES -->
        <?php if (isset($_SESSION['completado'])) : ?>
          <div class="alerta alerta-exito"> <?= $_SESSION['completado'];?>
          </div>
        
         <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error"> <?= $_SESSION['errores']['general'];?>
          </div>
         <?php endif; ?>
        <form action="registroAnimales.php" class="form" method="POST" >
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
          <label for="correo">Correo Electrónico</label>
          <input type="email" name="correo">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'correo') : ''; ?>
          <textarea name="mensaje" id="" cols="30" rows="10" placeholder="mensaje"></textarea>
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'mensaje') : ''; ?>
          <input type="submit" name="enviar" id="enviar" value="Enviar">
        </form>

        <?php borrarErrores(); ?>
      </div>
         
    </div>
   
    <div class="copy">
      CopyRight 2018 - Todos los derechos reservados
    </div>
  </footer>
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>
  window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')

  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/arriba.js"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
  window.ga = function() { ga.q.push(arguments) };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')

  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <!-- aos animation script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();

  </script>
</body>

</html>
