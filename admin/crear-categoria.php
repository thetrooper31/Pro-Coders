<?php
    include_once 'funciones/sesiones.php'; 
    include_once 'templates/header.php';
    include_once 'funciones/funciones.php';
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';                   
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear categorías de eventos
        <small>Rellene el formulario para crear una categoría.</small>
      </h1>
    </section>
     
    <div class="row">
        <div class="col-md-6">

    <section class="content">
  
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear categoría</h3>          
        </div>
        <div class="box-body">
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-categoria.php">
              <div class="box-body">
                    <div class="form-group">
                        <label for="usuario">Nombre:</label>
                        <input type="text" class="form-control" id="nombre_categoria"  name="nombre_categoria" placeholder="Categoría">
                    </div>
                    <div class="form-group">
                        <label for="">Icono:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fas fa-address-book"></i>
                           </div>  
                           <input type="text" id="icono" name="icono" class="form-control pull-rigth" placeholder="fa-icon">     
                       </div>  
                    </div>                                                   
             </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <input type="hidden" name="registro" value="nuevo">  
                  <button type="submit" class="btn btn-primary" id="crear-registro">Añadir</button>
              </div>
            </form>
        </div>
        
      </div>
    

    </section>

          </div>
      </div>
  </div>


   <?php
       include_once 'templates/footer.php';
  ?>