<?php include "header.php"; ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="banner-neuro-codificacion">
    <div class="container padding-top-bottom">
      <div class="five columns logo-codificacion">
        <img class="twelve columns" src="images/logo-neuro-codificacion.png" alt="">
      </div>

      <div class="seven columns people">
        <img class="twelve columns" src="images/people.png" alt="">
      </div>
    </div>
  </div>

  <!-- Franja negra -->
  <div class="call-to-action">
    <div class="container">
      <p>Aprenderás cómo <span>de-codificar</span> y <span>codificar científicamente</span> discursos comerciales, ventas; y lo más importante <span>tu mente</span>.</p>
    </div>
  </div>
  
  <!-- Zona video y formulario-->
  <div class="video-form">
    <div class="container">
      <div class="eight columns">
        <div class="video-container">
          <iframe width="100%" height="355" src="https://www.youtube.com/embed/E2FViQeollU?showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

      <!-- Formulario -->
      <div class="four columns formulario">
        <h3>Déjanos Tus Datos</h3>
        <form method="POST" action="">
          <div><input type="text" class="nombre" name="nombre" placeholder="NOMBRE" value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>"><?php if(isset($errors)){ echo $errors[1]; } ?></div>
          <div><input type="text" class="apellido" name="apellido" placeholder="APELLIDO" value="<?php if(isset($_POST['apellido'])){ echo $_POST['apellido']; } ?>"><?php if(isset($errors)){ echo $errors[2]; } ?></div>
          <div><input type="email" class="email" name="email" placeholder="CORREO ELECTRÓNICO" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>"><?php if(isset($errors)){ echo $errors[3]; } ?></div>
          <div><input type="tel" class="telefono" name="telefono" placeholder="CELULAR" value="<?php if(isset($_POST['telefono'])){ echo $_POST['telefono']; } ?>"><?php if(isset($errors)){ echo $errors[4]; } ?></div>
          <div><input type="text" class="ciudad" name="ciudad" placeholder="CIUDAD" value="<?php if(isset($_POST['ciudad'])){ echo $_POST['ciudad']; } ?>"><?php if(isset($errors)){ echo $errors[5]; } ?></div>
          <?php if(isset($result)) { echo $result; } ?>
          <label for=""><img width="12" src="images/icon-lock.png" alt=""> Confidencialidad. Nunca SPAM</label>
          <div><input type="submit" class="boton" name="boton" value="Solicitar más información"></div>
        </form>
      </div>
    </div>
  </div>

  <!-- Agenda Academica -->

  <div class="sector-tres center">
    <div class="container">
      <div class="row">
        <div class="ten columns offset-by-one">
          <p>Tu participación en este programa certificado tiene un alto valor curricular, serás acreditado con un título otorgado por BiiA Lab USA una de las instituciones más auténticas y vanguardistas de los Estados Unidos; al cursar y completar correctamente tu examen el cual deberás tomarlo en línea en <a target="new" href="http://www.biialab.org/"><strong>www.BiiALab.org</strong></a> en un tiempo máximo de 10 días, después de terminar el programa recibirás el mismo vía digital.</p>
        </div>

        <div class="eight columns offset-by-two offset-by-one agenda">
          <img class="twelve columns" src="images/bg-agenda.png" alt="">
        </div>
      </div>
      
    </div>
  </div>

  <!-- Sello -->
  <div class="sello"><img src="images/sello.png" alt=""></div>

  <!-- Certificado BiiA -->
  <div class="cerficiado">
    <div class="container center">
      <div class="eight columns offset-by-two">
        <img class="twelve columns" src="images/logo-certificado-biia.png" alt="">
      </div>
    </div>
  </div>

  <!-- Proximas fechas -->
  <div class="proximas-fechas" id="ver-fechas">
    <div class="container banderas">
      <h4>PRÓXIMAS <span>FECHAS</span> DEL PROGRAMA</h4>
      <div><br></div>
      <!-- Medellin-->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/colombia.png" alt=""><p class="country">Medellín, Colombia</p>
        </div>
        <div class="six columns right col2">
          <p>17 de Marzo de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>
      
      <!-- Arequipa-->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/peru.png" alt=""><p class="country">Arequipa, Perú</p>
        </div>
        <div class="six columns right col2">
          <p>22 de Abril de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Monterrey-->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/mexico.png" alt=""><p class="country">Monterrey, México</p>
        </div>
        <div class="six columns right col2">
          <p>25 de Abril de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Santiago -->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/chile.png" alt=""><p class="country">Santiago, Chile</p>
        </div>
        <div class="six columns right col2">
          <p>6 de Mayo de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Buenos Aires -->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/argentina.png" alt=""><p class="country">Buenos Aires, Argentina</p>
        </div>
        <div class="six columns right col2">
          <p>10 de Mayo de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Montevideo -->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/uruguay.png" alt=""><p class="country">Montevideo, Uruguay</p>
        </div>
        <div class="six columns right col2">
          <p>12 de Mayo de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Cancun -->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/mexico.png" alt=""><p class="country">Cancún, México</p>
        </div>
        <div class="six columns right col2">
          <p>16 de Junio de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Queretaro -->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/mexico.png" alt=""><p class="country">Queretaro, México</p>
        </div>
        <div class="six columns right col2">
          <p>21 de Junio de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Leon -->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/mexico.png" alt=""><p class="country">León, México</p>
        </div>
        <div class="six columns right col2">
          <p>22 de Junio de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Giadalajara -->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/mexico.png" alt=""><p class="country">Guadalajara, México</p>
        </div>
        <div class="six columns right col2">
          <p>27 de Junio de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

      <!-- Tijuana -->
      <div class="ten columns offset-by-one col1">
        <div class="six columns">
          <img src="images/banderas/mexico.png" alt=""><p class="country">Tijuana, México</p>
        </div>
        <div class="six columns right col2">
          <p>1 de Julio de 2016 <a class="botton-yellow" href="">Quiero asistir</a></p> 
        </div>
      </div>
      <div class="ten columns offset-by-one"><hr></div>

    </div>
    <div class="container center solicito-llamen">
      <a class="botton-yellow various" href="#inline">Solicito que me llamen</a>
    </div>

    <div id="inline" style="width:100%;display: none;">
      <!-- Formulario -->
      <div class="container formulario">
        <h4 class="center">Déjanos Tus Datos</h4>
        <form method="POST" action="">
          <div><input type="text" class="nombre1" name="nombre1" placeholder="NOMBRE" value="<?php if(isset($_POST['nombre1'])){ echo $_POST['nombre1']; } ?>"><?php if(isset($errorss)){ echo $errorss[6]; } ?></div>
          <div><input type="text" class="apellido1" name="apellido1" placeholder="APELLIDO" value="<?php if(isset($_POST['apellido1'])){ echo $_POST['apellido1']; } ?>"><?php if(isset($errorss)){ echo $errorss[7]; } ?></div>
          <div><input type="email" class="email1" name="email1" placeholder="CORREO ELECTRÓNICO" value="<?php if(isset($_POST['email1'])){ echo $_POST['email1']; } ?>"><?php if(isset($errorss)){ echo $errorss[8]; } ?></div>
          <div><input type="tel" class="telefono1" name="telefono1" placeholder="CELULAR" value="<?php if(isset($_POST['telefono1'])){ echo $_POST['telefono1']; } ?>"><?php if(isset($errorss)){ echo $errorss[9]; } ?></div>
          <div><input type="text" class="ciudad1" name="ciudad1" placeholder="CIUDAD" value="<?php if(isset($_POST['ciudad1'])){ echo $_POST['ciudad1']; } ?>"><?php if(isset($errorss)){ echo $errorss[10]; } ?></div>
          <?php if(isset($result)) { echo $result; } ?>
          <label class="center" for=""><img width="12" src="images/icon-lock.png" alt=""> Confidencialidad. Nunca SPAM</label>
          <div><input type="submit" class="boton1" name="boton1" value="Enviar datos"></div>
        </form>
      </div>
    </div>
  </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php include "footer.php"; ?>

