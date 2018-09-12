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
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
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
                        <input type="password" class="form-control" id="password" name="password" placeholder="Escribe tu contraseña para iniciar sesión">
                    </div>
                    <div class="form-group">
                    <label for="password">Repetir contraseña: </label>
                    <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Repita su contraseña">
                    <span id="resultado_password" class="help-block"></span>
                  </div>                        
             </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <input type="hidden" name="registro" value="nuevo">  
                  <button type="submit" class="btn btn-primary" id="crear-registro_admin">Añadir</button>
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
 

