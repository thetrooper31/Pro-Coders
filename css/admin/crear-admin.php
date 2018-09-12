<?php 
    include_once 'funciones/sesiones.php';
    include_once 'templates/header.php';
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';
    include_once 'funciones/funciones.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear administrador
        <small>Rellene el formulario</small>
      </h1>
    </section>
     
    <div class="row">
        <div class="col-md-6">

    <section class="content">
  
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Administrador</h3>          
        </div>
        <div class="box-body">
        <form role="form" name="crear-admin" id="crear-admin" method="post" action="insertar-admin.php">
              <div class="box-body">
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" id="usuario"  name="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Tu nombre completo">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password " name="password" placeholder="Escribe tu contraseña para iniciar sesión">
                    </div>                       
             </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <input type="hidden" name="agregar-admin" value="1">  
                  <button type="submit" class="btn btn-primary">Añadir</button>
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
 

