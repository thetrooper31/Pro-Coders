
   <footer class="site-footer">
     <div class="container contenedor clearfix">
        <div class="footer-informacion">
            <h3>Sobre<span>ProCoders</span></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
        </div>
        <div class="ultimos-tweets">
            <h3>Últimos<span>tweets</span></h3>
            <a class="twitter-timeline" data-height="300" data-theme="dark" data-link-color="#ddff2e" href="https://twitter.com/PR0CODERS?ref_src=twsrc%5Etfw">Tweets by PR0CODERS</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  
         </div>
        <div class="menu">
            <h3>Redes<span>sociales</span></h3>
            <nav class="redes-sociales">
              <a href="#"><i class="fab fa-facebook-square"></i></a>
              <a href="#"><i class="fab fa-twitter-square"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </nav><!--cierre-redes-sociales-->
        </div>
      </div><!--cierre-container-->
      <p class="container-fluid copyright">Todos los derechos reservados Procoders 2018</p>
   </footer>

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
      if($pagina == 'invitados' || $pagina == 'index'){
        echo '<script src="js/lib/jquery.colorbox-min.js"></script>';
      } else if($pagina == 'conferencia') {
        echo '<script src="js/lightbox.js"></script>';
      }
  ?>
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="crossorigin=""></script>
  <script src="js/main.js"></script>
    
  
  <script src="js/script.js"></script>
  
</body>

</html>