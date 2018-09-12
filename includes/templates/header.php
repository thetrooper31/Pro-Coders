<!DOCTYPE html>
<html lang="es-es" >

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="js/vendor/jquery-3.3.1.min.js"></script>
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="css/leaflet.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
      if($pagina == 'invitados' || $pagina == 'index'){
        echo '<link rel="stylesheet" href="css/colorbox.css">';
      } else if($pagina == 'conferencia') {
        echo '<link rel="stylesheet" href="css/lightbox.css">';
      }
  ?>
    
  
  
</head>

<body class="<?php echo $pagina; ?>">
  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-twitter-square"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav><!--cierre-redes-sociales-->
        <div class="informacion-evento">
          <div class="clearfix">
              <p class="ciudad"><i class="fas fa-map-marker-alt mr-2"></i>Próximo Málaga</p>
              <p class="fecha"><i class="far fa-calendar-alt mr-2"></i> 28-29 y 30 de Sept.</p>
          </div>
          <h1 class="nombre-sitio mt-5">ProCoders&nbsp; &LT; &sol; &gt;</h1>
          <p class="slogan">Tú página de <span>conferencias web</span></p>
        </div>
      </div><!--cierre-contenido-header-->
    </div> <!--cierre-hero-->
  </header>

  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark barra">
    <a class="navbar-brand nombrebarra" href="index.php">ProCoders&nbsp; &LT; &sol; &gt;</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav navbarMenu">
        <!-- <a class="nav-item nav-link active" href="#">Conferencia <span class="sr-only">(current)</span></a> -->
        <a class="nav-item nav-link" href="calendario.php">Calendario</a>
        <a class="nav-item nav-link" href="invitados.php">Invitados</a>
        <a class="nav-item nav-link" href="registro.php">Reservas</a>
      </div>
    </div>
  </nav>
