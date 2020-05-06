 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="img/logoinicial2.png" alt="logo" width="55">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link <?php if ($pagina == "index"){echo "active";} ?>" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($pagina == "historia"){echo "active";} ?>" href="historia.php">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($pagina == "razas"){echo "active";} ?>" href="razas.php">Razas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($pagina == "cuidados"){echo "active";} ?>" href="cuidados.php" tabindex="-1" aria-disabled="true">Cuidados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($pagina == "equitacion"){echo "active";} ?>" href="equitacion.php" tabindex="-1" aria-disabled="true">Equitación</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($pagina == "productos"){echo "active";} ?>" href="productos.php" tabindex="-1" aria-disabled="true">Productos</a>
        </li>
      </ul>
    </div>
  </nav>
