
  <?php include_once 'includes/templates/header.php'; ?>

   <section class="container sectionClass mt-5 mb-5">
     <h2>La mejor web de conferencias de programación</h2>
       <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta)</p>
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
           <nav class="menu-programa ml-5 mb-3">
             <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
             <a href="#conferencia"><i class="far fa-comments ml-5"></i> Conferencias</a>
             <a href="#seminario"><i class="fas fa-university ml-5"></i> Seminarios</a>
           </nav>

           <div id="talleres" class="info-curso ocultar clearfix ml-5">
              <div class="detalle-evento mt-4">
                <h2>HTML, CSS3 Y JavaScript</h2>
                <p><i class="fas fa-clock mr-3 mt-4"></i>16:00 hrs</p>
                <p><i class="fas fa-calendar mr-3 mt-4"></i>10 de Sept</p>
                <p><i class="fas fa-user mr-3 mt-4"></i>Juan Pablo De la torre</p>
              </div>
           </div><!--cierre--primer--evento-->
           <div id="talleres" class="info-curso ocultar clearfix ml-5 mt-5">
              <div class="detalle-evento">
                <h2>Angular</h2>
                <p><i class="fas fa-clock mr-3 mt-4"></i>20:00 hrs</p>
                <p><i class="fas fa-calendar mr-3 mt-4"></i>10 de Sept</p>
                <p><i class="fas fa-user mr-3 mt-4"></i>Juan Pablo De la torre</p>
              </div>
              <a href="#" class="button float-left mb-4">Ver todos</a>
           </div><!--cierre--segundo--evento-->
         </div><!--cierre--segundo--evento-->
         </div><!--cierre--programa--evento-->
       </div><!--contenedor-->
      </div><!--contenido--programa-->
   </section> <!--cierre--section--2-->

   <section class="invitados contenedor seccion">
     <h2 class="nuestrosInvitados mt-5">Nuestros Invitados</h2>
     <div class="container">
      <div class="card-deck">
          <div class="card invitado">
            <img class="card-img-top imgClass" src="img/persona4.jpg" alt="Card image cap">

            <div class="card-footer textoInvitados2">
              <small class="text-muted textoInvitados"><span class="spanText">Susana González</small></span>
            </div>
          </div>
          <div class="card invitado">
            <img class="card-img-top imgClass" src="img/persona5.jpg" alt="Card image cap">

            <div class="card-footer textoInvitados2">
              <small class="text-muted textoInvitados"><span class="spanText"> Raquel Hernández</small></span>
            </div>
          </div>
          <div class="card invitado">
            <img class="card-img-top imgClass" src="img/persona3.jpg" alt="Card image cap">

            <div class="card-footer textoInvitados2">
              <small class="text-muted textoInvitados"><span class="spanText"> Felipe Rodríguez</small></span>
            </div>
          </div>
        </div>
        </div><!--cierre--container-->
   </section>
   <div class="dummy_page"></div>

   <section class="invitados contenedor seccion">
      <div class="container">
       <div class="card-deck">
           <div class="card invitado">
             <img class="card-img-top imgClass" src="img/persona6.jpg" alt="Card image cap">
             <div class="card-footer textoInvitados2">
               <small class="text-muted textoInvitados"><span class="spanText"> Emilia Gómez</small></span>
             </div>
           </div>
           <div class="card invitado">
             <img class="card-img-top imgClass" src="img/persona2.jpg" alt="Card image cap">
             <div class="card-footer textoInvitados2">
               <small class="text-muted textoInvitados"><span class="spanText">Pedro Herrera</small></span>
             </div>
           </div>
           <div class="card invitado">
             <img class="card-img-top imgClass" src="img/persona1.jpg" alt="Card image cap">
             <div class="card-footer textoInvitados2">
               <small class="text-muted textoInvitados"><span class="spanText"> Rafael Bautista</small></span>
             </div>
           </div>
         </div>
        </div> <!--cierre--container--2-->
    </section>

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
  <div class="container">
    <h2>Precios</h2>
    <div class="card-deck text-center mt-5">
      <div class="card classcard">
        <div class="card-body">
          <h5 class="card-title pasesclass">TICKET POR UN DÍA</h5>
          <h5 class="card-title classPrecio">30€</h5>
          <h5 class="card-title"><i class="fas fa-check mr-2 checkclass"></i>TODAS LAS CONFERENCIAS</h5>
          <h5 class="card-title"><i class="fas fa-check mr-2 checkclass"></i>TODOS LOS TALLERES</h5>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-primary btnprecio">COMPRAR</a>
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
            <a href="#" class="btn btn-primary btnprecio">COMPRAR</a>
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
            <a href="#" class="btn btn-primary btnprecio">COMPRAR</a>
        </div>
      </div>
    </div>
  </div><!--cierre--container--precios-->

  <!-- <div id="mapa" class="mapa">

  </div> -->


  <div class="newsletter parallax mt-5">
    <div class="contenido contenedor">
      <p>Regístrate a Pro Coders</p>
      <h3>ProCoders &nbsp; &LT; &sol; &gt;</h3>
      <a href="#" class="button transparente">Registro</a>
    </div>
  </div>
  <?php include_once 'includes/templates/footer.php'; ?>
   <!--==========================================================================
    FIN SECTION
   ==========================================================================-->





