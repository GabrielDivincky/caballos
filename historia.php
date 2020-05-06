<?php 

$pagina = "historia";

 ?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
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

 <body style="background: none"> 

  <!-- HEADER -->
<?php 

include_once('includes/header.php');

 ?>

<span class="ir-arriba icon-arrow-up"></span>
<!-- Caroousel -->

 
  <div id="carousel">   
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/caballosHistoria1.jpg" class="d-block w-100" alt="Historia del caballo 1">
            </div>
            <div class="carousel-item">
              <img src="img/caballosHistoria2.jpg" class="d-block w-100" alt="Historia del caballo 2">
            </div>-
            <div class="carousel-item">
              <img src="img/caballosHistoria3.jpg" class="d-block w-100" alt="Historia del caballo 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
    </div>
  </div> 

 <div class="contenidoGeneral">   
    <h1>Historia</h1>

<!-- Columnas -->
     <div class="container">
        <div class="row contenido">
         <div class="colum col-sm-12 col-lg-4">
            Sin duda, si hay un animal que ha formado parte de nuestra historia como civilización, y que ha acompañado al hombre en sus conquistas, luchas, y desarrollo, ese ha sido el caballo.  Sin embargo, pasaron muchos años en su evolución hasta que llegó a formar parte de  nuestras ciudades y pueblos. 
          </div>
          <div class="colum col-sm-12 col-lg-4">
            El Caballo dicen que procedía de norte América se supone que de ahí emigro a Sudamérica y Asia a través del itsmo que unía entonces a América con Asia. Desde éste momento llego a Europa y después a África. Cuando en la edad de piedra las tribus cazadoras llegaron en sentido contrario hasta América, el caballo fue cazado con saña hasta ser exterminados. 
          </div>
          <div class="colum col-sm-12 col-lg-4">
            Los conquistadores españoles a principios del siglo XVI, volvieron a introducirlo en el continente Americano. El hombre  utilizado la fuerza y la velocidad del caballo desde que lo domestico para cambiar su forma de vida.
            En lugar de echar raíces en un sitio pudo trasladarse con rapidez a sitios muy distantes, llevando consigo cuanto necesitaba.
            
          </div>
         
        </div>
    </div>
  </div>  


 <!-- FOOTER -->

  <?php 

  include_once('includes/footer.php');

   ?>


  
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/arriba.js"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

  <!-- aos animation script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

</body>

</html>


   
