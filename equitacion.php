<?php 

$pagina = "equitacion";
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

 
<!-- Caroousel -->
<body style="background: white;">
      <!-- header -->

      <?php 

      include_once('includes/header.php');

       ?>
<span class="ir-arriba icon-arrow-up"></span>
<div id="central">
  <div class="equitacion">
    <div class="textoEquitacion">
      <h2>La equitación</h2>
      <p>
        La equitación es un deporte que te hace estar en continuo contacto la naturaleza. La relación que se establece con el caballo solo la pueden explicar aquellos que practican este deporte.  Dentro de la equitación encontramos la doma clásica, la base para cualquier disciplina pero que va mucho más allá, son pruebas de 5 a 7 minutos en el que el caballo y jinete deberán realizar una serie de ejercicios que serán puntuados de 1 a 10 por 3 o 5 jueces dependiendo de la prueba. El salto de obstáculos que consiste en saltar los obstáculos sin tirar ningún palo en el menor tiempo posible. Raid, Completo, Doma Vaquera, Polo  y Alta escuela son otras de las disciplinas más conocidas.
      </p>
    </div>
    <div class="imagen">
    <img  src="img/equitacion.jpg" style="width:100%; height: 100%" alt="equitacion";>
    </div>
  </div>
  <div class=" equitacion">
    <div class="textoEquitacion dos">
      <h2>Equitación en la competición</h2>
      <p>
        La competición es considerada un factor fundamental para aquellos que practican este deporte. Sea cual sea la disciplina resulta importante ir a concursos. Los concursos de equitación no solo sirven para competir con otros jinetes y caballos, sino que son importantes para conocer la opinión de los jueces sobre el rendimiento de tu caballo, para saber si vas por el buen camino o si por el contrario, el entrenamiento no esta siendo efectivo.
        Dependiendo de la disciplina la competición de equitación será de una forma u otra. Suelen ser concursos de tres días, que la mayoría de las veces son viernes, sábado y domingo. Las pruebas a realizar están divididas en menores y mayores.  Las categorías de los menores dependerán de la edad que estos tengan. Podemos encontrar alevines, infantiles, juveniles 0*, juveniles y jóvenes jinetes.
        Las pistas de los concursos deben ser reglamentarias y tener los metros establecidos en la RFHE. El número de caballos por prueba no está establecido. Habrá pruebas en las que haya inscritos tres caballos, y otras en las que serán 100 los jinetes que tendrán que competir por conseguir el oro. Para ir a una competición nacional debemos estar federados en la RFHE, pagar la inscripción y tener al día la guía del caballo. Por lo que la equitación es considerado un deporte costoso.
      </p>
    </div>
    <div class="imagen">
    <img  src="img/equitacion2.jpg" style="width:100%; height: 100%" alt="equitacion2" >
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
