  <?php include_once 'includes/templates/header.php'; ?>

   <section class="container sectionClass mt-5 mb-5">
     <h2>La mejor web de conferencias de programación</h2>
       <p>Donde encontraras toda la información necesaria: presentadores o ponentes, horarios, reservas, compra, ubicación y todo lo que necesitas saber.</p>
   </section> <!--cierre--section--1-->

   <section class="programa">
      <div class="contenedor-video">
       <video autoplay loop>
         <source src="video/Laptop_-_1625-148614367.mp4" type="video/mp4">
       </video>
     </div> <!--cierre--contenedor--video-->
     <div class="contenido-programa">
       <div class="contenedor">
         <div class="programa-evento">
           <h2>Próximos Eventos</h2>
           
                <?php
                try {
                  require_once('includes/funciones/bd_conexion.php');
                  $sql = "SELECT * FROM `categoria_evento` ";
                  $resultado = $conn->query($sql);
                } catch (Exception $e) {
                  $error = $e->getMessage();
                }
                ?>
      <nav class="menu-programa">
         <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
         <?php $categoria = $cat['cat_evento']; ?>
         <a href="#<?php echo strtolower($categoria) ?>">
         <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
      </a>
      <?php 
      } ?>
      </nav>

      <?php
      try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
        $sql .= "FROM `eventos` ";
        $sql .= "INNER JOIN `categoria_evento` ";
        $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
        $sql .= "INNER JOIN `invitados` ";
        $sql .= "ON eventos.id_inv=invitados.invitado_id ";
        $sql .= "AND eventos.id_cat_evento = 1 ";
        $sql .= "ORDER BY `evento_id` LIMIT 2;";
        $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
        $sql .= "FROM `eventos` ";
        $sql .= "INNER JOIN `categoria_evento` ";
        $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
        $sql .= "INNER JOIN `invitados` ";
        $sql .= "ON eventos.id_inv=invitados.invitado_id ";
        $sql .= "AND eventos.id_cat_evento = 2 ";
        $sql .= "ORDER BY `evento_id` LIMIT 2;";
        $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
        $sql .= "FROM `eventos` ";
        $sql .= "INNER JOIN `categoria_evento` ";
        $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
        $sql .= "INNER JOIN `invitados` ";
        $sql .= "ON eventos.id_inv=invitados.invitado_id ";
        $sql .= "AND eventos.id_cat_evento = 3 ";
        $sql .= "ORDER BY `evento_id` LIMIT 2;";
      } catch (Exception $e) {
        $error = $e->getMessage();
      }
      ?>

      <?php $conn->multi_query($sql); ?>

      <?php
      do {
        $resultado = $conn->store_result();

        ?>

      <?php $i = 0; ?>
      <?php while ($evento = $resultado->fetch_assoc()) : ?>
      <?php
      if ($i % 2 == 0) { ?>
      <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
      <?php 
    } ?>
      <div class="detalle-evento">
      <h3><?php echo html_entity_decode($evento['nombre_evento']) ?></h3>
      <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
      <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento']; ?></p>
      <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
      </div>
      <?php if ($i % 2 == 1) : ?>
      <a href="calendario.php" class="button float-right">Ver todos</a>
      </div> <!--#talleres-->
      <?php endif; ?>
      <?php $i++; ?>
      <?php endwhile; ?>
      <?php $resultado->free(); ?>
      <?php 
    } while ($conn->more_results() && $conn->next_result()); ?>

          </div> <!--.programa-evento-->
         </div> <!--.contenedor-->
        </div><!--.contenido-programa-->
      </section> <!--.programa-->

     <?php include_once 'includes/templates/invitados.php'; ?>     

    <div class="dummy_page"></div>

    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero">6</p>Invitados</li>
          <li><p class="numero">15</p>Talleres</li>
          <li><p class="numero">3</p>Dias</li>
          <li><p class="numero">9</p>Conferencias</li>
        </ul>
      </div>
    </div>

  <h2>Precios</h2>
  <div class="container">
    <div class="card-deck text-center mt-5">
      <div class="card classcard">
        <div class="card-body">
          <h5 class="card-title pasesclass">TICKET POR UN DÍA</h5>
          <h5 class="card-title classPrecio">30€</h5>
          <h5 class="card-title"><i class="fas fa-check mr-2 checkclass"></i>TODAS LAS CONFERENCIAS</h5>
          <h5 class="card-title"><i class="fas fa-check mr-2 checkclass"></i>TODOS LOS TALLERES</h5>
        </div>
        <div class="card-footer">
            <a href="registro.php" class="btn btn-primary btnprecio">COMPRAR</a>
        </div>
      </div>
      <div class="card classcard">
        <div class="card-body">
          <h5 class="card-title pasesclass">TICKET TODOS LOS DÍAS</h5>
          <h5 class="card-title classPrecio">50€</h5>
          <h5 class="card-title"><i class="fas fa-check mr-2 checkclass"></i>TODAS LAS CONFERENCIAS</h5>
          <h5 class="card-title"><i class="fas fa-check mr-2 checkclass"></i>TODOS LOS TALLERES</h5>
        </div>
        <div class="card-footer">
            <a href="registro.php" class="btn btn-primary btnprecio">COMPRAR</a>
        </div>
      </div>
      <div class="card classcard">
        <div class="card-body">
            <h5 class="card-title pasesclass">TICKET POR DOS DÍAS</h5>
             <h5 class="card-title classPrecio">45€</h5>
             <h5 class="card-title"><i class="fas fa-check mr-2 checkclass"></i>TODAS LAS CONFERENCIAS</h5>
             <h5 class="card-title"><i class="fas fa-check mr-2 checkclass"></i>TODOS LOS TALLERES</h5>
          </div>
          <div class="card-footer">
            <a href="registro.php" class="btn btn-primary btnprecio">COMPRAR</a>
          </div>
        </div>
      </div> 
    </div><!--cierre--container--precios-->
 

     <div class="ubicacion mt-4">
         <h2>Ubicación del evento</h2>
    </div>
   <div class="container mapa" id="map"></div>

  <div class="newsletter parallax mt-5">
    <div class="contenido contenedor">
      <p>Regístrate a Pro Coders</p>
      <h1 class="display-1 mb-4">ProCoders &nbsp; &LT; &sol; &gt;</h1>
      <a href="#" class="button transparente">Registro</a>
    </div>
  </div>
  <?php include_once 'includes/templates/footer.php'; ?>
   <!--==========================================================================
    FIN SECTION
   ==========================================================================-->





