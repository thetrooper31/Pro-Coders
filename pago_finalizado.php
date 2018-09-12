<?php include_once 'includes/templates/header.php'; ?>
 <section class="seccion contenedor">
       <h2>Resumen del Pago</h2>

            <?php
                $resultado = $_GET['exito'];
                $paymentId = $_GET['paymentId'];
                $id_pago = (int) $_GET['id_pago'];
  
                if($resultado == "true") {
                      echo "El pago se realizó correctamente. <br/>";
                      echo "El ID del pago o número de referencia es: {$paymentId}";

                      require_once('includes/funciones/bd_conexion.php');
                      $stmt = $conn->prepare("UPDATE `registrados` SET `pagado` = ? WHERE `ID_registrado` = ? ");   
                      $pagado = 1;         
                      $stmt->bind_param("ii", $pagado, $id_pago); 
                      $stmt->execute();            
                      $stmt->close();
                      $conn->close();

                } else {
                    echo "Pago rechazado, consulte a su banco";     
                }            
             ?>
  </section>

<?php include_once 'includes/templates/footer.php'; ?>