<?php 


$pagina = "productos";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <title>Caballos</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- icoomoon -->
  <link rel="stylesheet" href="icomoon/style.css">
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="css/pushbar.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/fonts.css">
</head>

<body style="background: none">

  <!-- Navigation -->
  <?php 

include_once('includes/header.php');

 ?>

<span class="ir-arriba icon-arrow-up"></span>
  <!-- Page Content -->
<div class="container">
  
      <nav>
           <div class="banner" data-pushbar-target="pushbar-productos">Productos Exclusivos</div>
      </nav>

        <div class="row">

          <div class="col-lg-4 col-md-4 mb-4 fotosProductos">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/saddle-3647014_640.jpg" alt="monturas"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Monturas</a>
                </h4>
                <h5>$80.99</h5>
                <p class="card-text">montura endurance de suela asiento de corderito sintético . armazón de madera revestido en cuero</p>
                <a href="#" class="boton" data-pushbar-target="pushbar-carrito">Comprar</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 mb-4 fotosProductos">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/riendas.jpg" alt="riendas"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Riendas</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">cabezada y rienda de polipropileno de 2cm de ancho, herrajes de hierro cincado, con triple refuerzo en costura.</p>
                <a href="#" class="boton" data-pushbar-target="pushbar-carrito">Comprar</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 mb-4 fotosProductos">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/estribos.jpg" alt="estribos"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Estribos</a>
                </h4>
                <h5>$54.99</h5>
                <p class="card-text">Estribo inglés. Taco de goma. Tamaño pequeño (11 cm.). Inoxidable. Color: Cromado.</p>
                <a href="#" class="boton" data-pushbar-target="pushbar-carrito">Comprar</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

     </div>

     <div class="row">

          <div class="col-lg-4 col-md-4 mb-4 fotosProductos">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/botas.jpg" alt="botas"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Botas</a>
                </h4>
                <h5>$29.99</h5>
                <p class="card-text">botas para equitación de PVC inyectado, habitualmente llamadas de goma. </p>
                <a href="#" class="boton" data-pushbar-target="pushbar-carrito">Comprar</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 mb-4 fotosProductos">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/frontaleras.jpg" alt="frontaleras"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Frontaleras</a>
                </h4>
                <h5>$14.99</h5>
                <p class="card-text">Frontalera elaborada en un material resistente y duradero. </p>
                <a href="#" class="boton" data-pushbar-target="pushbar-carrito">Comprar</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 mb-4 fotosProductos">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/manta.jpg" alt="manta"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Mantas</a>
                </h4>
                <h5>$27.99</h5>
                <p class="card-text">Manta de Presentación de Gabardina para Turf con Cogotera Talabarteria Crespo.</p>
                <a href="#" class="boton" data-pushbar-target="pushbar-carrito">Comprar</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

     </div>

     <div data-pushbar-id="pushbar-carrito" data-pushbar-direction="right" class="pushbar-carrito">
          
          <div class="btn-cerrar izquierda">
            <button data-pushbar-close><i class="fas fa-times"></i></button>
          </div>

        <p class="titulo">Carrito de Compras</p>
        <div class="item">
          <img src="img/saddle-3647014_640.jpg" alt="monturas">
          <div class="textos">
            <p class="nombre-item">Monturas</p>
            <p>$80.99</p>
          </div>
        </div>
       
        <div class="item">
          <img src="img/riendas.jpg" alt="riendas">
          <div class="textos">
            <p class="nombre-item">Riendas</p>
            <p>$24.99</p>
          </div>
        </div>
        <div class="total">
          <p class="precio-total">Total:</p>
          <p>$105.98</p>
        </div>

     </div>  

  

  </div>

  <!-- Footer -->
  <?php 

  include_once('includes/footer.php');

   ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="js/pushbar.js"></script>
  <script src="js/arriba.js"></script>
  <script>
    var pushbar = new Pushbar({
        blur: true,
        overlay: true
    });
      </script>
</body>

</html>
