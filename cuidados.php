<?php 

$pagina = "cuidados";

 ?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Cuidados</title>
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


<!-- BODY -->
<body style="background: none"><!-- header -->

<?php 

include_once('includes/header.php');

 ?>
 <span class="ir-arriba icon-arrow-up"></span>
  <div class="container">
      
      <div class="lista">
        <h1 class="titulos">Cuidados básicos del caballo</h1>
          <ul>
            <li><a href="#1">Cuidados de la caballeriza</a></li>
            <li><a href="#2">Cómo debe ser un buen espacio de pasto</a></li>
            <li><a href="#3">Limpieza del caballo</a></li>
            <li><a href="#4">Cuidado y mantenimiento de los cascos</a></li>
            <li><a href="#5">Alimentación del caballo</a></li>
          </ul>
      </div>
     
      <div class="informe">
        <div class="minidiv">
        <h2 id="1" class="titulos">Cuidados de la caballeriza</h2>
        <p>Mantener limpio el comedero y el bebedero
          Con limpiarlo un par de veces a la semana para quitar bien los restos de comida que pueda haber es suficiente.
          Cambiar el material de la cama

          Algo que debe llevarse a cabo al menos una vez a la semana.
          Ventilar el lugar y remover la cama

          Fundamental para que no se apelmace y se refresque un poco.
          Sacar el estiércol

          Será recomendable varias veces a día. Si no lo hacemos nuestro caballo puede acabar contrayendo alguna enfermedad.</p>
        </div>
        <img src="img/cuidado1.jpg" class="fotos" alt="">
      </div>
      
      <div class="informe">
        <div class="minidiv">
          <h2 id="2" class="titulos">Un pasto saludable</h2>
          <p>Los buenos pastos brindan a su caballo tiempo de pastoreo natural, ejercicio, un espacio para interactuar con compañeros de manada y una buena nutrición. Sin embargo, el pasto de su caballo tiene algunos enemigos, incluido el pastoreo excesivo, la compactación del suelo, la sequía, las malezas y el lodo que estresan la hierba.
          Vale la pena el tiempo para inspeccionar sus pastizales y evaluar su salud. Los pastos pueden parecer exuberantes a simple vista, pero pueden estar llenos de malezas que su caballo no quiere o no debería comer, o tener lugares descubiertos que no sostienen nada.</p>
        </div>

      <img src="img/cuidado2.jpg" class="fotos" alt="">
      </div>

      
      <div class="informe"><div class="minidiv">
        <h2 id="3" class="titulos">Limpieza del caballo</h2>
        <p>Una buena salud para el caballo parte de la limpieza y buen cepillado sobre todo si están en el box. Con el cepillado quitamos las células muertas del pelo así como las toxinas sin olvidar los vínculos de unión que se forman entre las personas y el caballo.
        Para el buen cepillado y limpieza se necesita unos utensilios adecuados y de tiempo porque para ello necesitaremos mínimo media hora. El mejor momento para el aseo y cepillado es realizarlo después de que haya hecho ejercicio ya que los poros de la piel es cuando están más abiertos y facilita la limpieza.</p></div>
      <img src="img/cuidado3.jpg" class="fotos" alt="">
      </div>
      
      <div class="informe"><div class="minidiv">
        <h2 id="4" class="titulos">Cuidado y mantenimiento de los cascos</h2>
        <p>El casco del caballo es el recubrimiento córneo del pie del caballo. Las partes que definen el casco protegen a las estructuras subyacentes del pie e inician la disipación de las fuerzas producidas cuando el pie golpea contra el suelo.
        El cuidado de los cascos del caballo es una tarea fundamental dentro de los cuidados del animal, puesto que sin un adecuado mantenimiento de los mismos pueden producirse problemas como grietas, abcesos e infecciones graves que pueden llevar a enormes dificultades de movilidad.</p></div>
      <img src="img/cuidado4.jpg" class="fotos" alt="">
      </div>
      
      <div class="informe"><div class="minidiv">
        <h2 id="5" class="titulos">Alimentación del caballo</h2>
        <p>Los caballos son animales que se alimentan fundamentalmente mediante el pastoreo y tienen un sistema digestivo delicado, el estómago solo es capaz de procesar pequeñas cantidades de comida debido al tamaño tan pequeño que tienen.  Cuando alimentamos a los caballos con cantidades de comida relativamente grandes debemos tener mucho cuidado con lo que le damos y cómo lo hacemos. La cantidad de alimentos que un caballo necesita varía de acuerdo a la actividad, la edad, la raza, el clima, la calidad de los alimentos, la calidad de la vivienda y la condición de los dientes.</p></div>
      <img src="img/cuidado5.jpg" class="fotos" alt="">
      </div>
  </div>
  <!-- VER PAGINA DE https://www.expertoanimal.com/cuidados-basicos-del-caballo-7737.html -->
  <!-- FOOTER -->
  <?php 

  include_once('includes/footer.php');

   ?>



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
