<!DOCTYPE html>
<html ng-app>
<?php

/**
 * Login template
 * Based on a forum contribution by Ryan, can't locate it, but the are many examples of login forms.
 * 
 */

// check for login before outputting markup
if($input->get->user && $input->get->pass) {

  $user = $sanitizer->username($input->get->user);
  $pass = $input->get->pass; 

  if($session->login($user, $pass)) {
    // login successful
        $session->redirect($pages->get("/")->url); }
      
    else { 
      $session->redirect($config->urls->root); }
       
    
  
}



?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='<?php echo $config->urls->templates?>assets/css/benipeixcar.css'>
  <link rel='stylesheet' href='<?php echo $config->urls->templates?>assets/css/app.css'>
  <link rel='stylesheet' href='<?php echo $config->urls->templates?>assets/css/animate.min.css'>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Yanone+Kaffeesatz:200,300,400,700|Raleway:200,300,400,500,700' rel='stylesheet' type='text/css'>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <link href="<?php echo $config->urls->templates?>assets/favicon.ico" rel="shortcut icon">
  <link href="<?php echo $config->urls->templates?>assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Hospital Veterinario Benipeixcar - <?php echo $page->name ?></title>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
 <script src='<?php echo $config->urls->templates?>assets/js/jquery-1.11.1.min.js'></script>
 <script src='<?php echo $config->urls->templates?>assets/angular/controlador.js'></script>
</head>

<body>

<div aria-hidden='true' aria-labelledby='loginModalLabel' class='modal fade' id='loginModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Formulario de login</h4>
      </div>
      <div class='modal-body'>

          <div class='row'>
            <div class='col-md-6'>
              
              <form class="" action='./' method='get' target='_parent'>
  <label for="user">Usuario</label><br>
  <input type="text" name="user" id="user" placeholder="Usuario...">
</div>
<div class='col-md-6'>
  <label for="pass">Contraseña</label><br>
  <input type="password" name="pass" id="pass" placeholder="Contraseña...">
  
<div class='modal-footer'>
  <button type="submit" name="submit" class="btn btn-primary">Login</button>
  </div>

</form>
            </div>

          </div>

      </div>
    </div>
  </div>
</div>


<div aria-hidden='true' aria-labelledby='registerModalLabel' class='modal fade' id='registerModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Formulario de Registro</h4>
      </div>
      <div class='modal-body'>

          <div class='row'>
            <div class='col-md-12'>
              
              <?php echo $forms->embed('registro'); ?>

            </div>

          </div>

      </div>
    </div>
  </div>
</div>
  <!--
  <div aria-hidden='true' aria-labelledby='contactModalLabel' class='modal fade' id='contactModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Formulario de contacto</h4>
      </div>
      <div class='modal-body'>
        <form action='#' role='form'>
          <div class='form-group'>
            <div class='row'>
              <div class='col-md-6'>
                <label class='control-label' for=''>Nombre</label>
                <input class='form-control' placeholder='Tu nombre' type='text'>
              </div>
              <div class='col-md-6'>
                <label class='control-label' for=''>Email</label>
                <input class='form-control' placeholder='Tu correo electrónico' type='text'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <div class='row'>
              <div class='col-md-12'>
                <label class='control-label' for=''>Mensaje</label>
                <textarea class='form-control' name='' rows='4'></textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Cancelar</button>
        <button class='btn btn-primary' type='button'>Enviar</button>
      </div>
    </div>
  </div>
</div>

-->

<div class='noise-wrapper'>
  <div class='header-main'>
    <div class='container'>
  <nav class='navbar navbar-default' role='navigation'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button class='navbar-toggle' data-target='.navbar-ex1-collapse' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='current navbar-brand' href='/'>
        <img alt=''  src='<?php echo $config->urls->templates?>assets/images/logo.jpg' style="margin-top:3%;">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse navbar-ex1-collapse'>
       <?php if ($user->isGuest()) {
            
            echo"
            <a class='btn btn-default navbar-btn navbar-right' data-toggle='modal' href='#registerModal'>
            Registro
            <i class='icon-signin'></i>
            </a>
            <a class='btn btn-default navbar-btn navbar-right' data-toggle='modal' href='#loginModal'>
            Acceso
            <i class='icon-signin'></i>
            </a>
            

            ";

    } else { 
              if ($user->hasRole("hospital") || $user->isSuperuser()) {
            
            
            echo"<a href='".$pages->get("template=logout")->url."'><button action='".$config->urls->templates."logout.php' name='logout' class='btn btn-default navbar-btn navbar-right'>Desconexión<i class='icon-signout'></i></button></a>";
           
            echo"
            <a class='btn btn-default navbar-btn navbar-right' name='plataforma' href='".$config->urls->root.'plataforma/mascotas'."'>
            Plataforma
            <i class='icon-signin'></i>
            </a>";}


            else { echo"<a href='".$pages->get("template=logout")->url."'><button action='".$config->urls->templates."logout.php' name='logout' class='btn btn-default navbar-btn navbar-right'>Desconexión<i class='icon-signout'></i></button></a>";}
        
        } ?>
    

      <div class="col-md-3  navbar-right" style="margin-top:1%">
          <ul class="footer-social">
           <a href="https://www.facebook.com/pages/Hospital-Veterinario-Benipeixcar-Urgencias-24-horas-Valencia/331658603582158"><i class="icon-facebook icon-large col-md-1"></i></a><a href="#"><i class="icon-twitter icon-large  col-md-1"></i></a><a href="#"><i class="icon-linkedin icon-large  col-md-1"></i></a><a href="#"><i class="icon-google-plus icon-large col-md-1"></i></a>
          </ul>
        </div>
      <ul class='nav navbar-nav navbar-right'>
        <li class='current active'>
          <a class='current' href='<?php echo $config->urls->root?>' style="color:#305B7C"><strong>Inicio</strong></a>
        </li>
        
<?php  foreach($pages->get('/')->children() as $seccion) {  ?>

	<?php if ($seccion->name == "galeria" || $seccion->name == "contactar" || $seccion->name == "nosotros" || $seccion->name == "ofertas") { ?>
    	<li>
          <a href='<?php echo $seccion->url ?>' style="color:#305B7C"><strong><?php echo $seccion->title ?></strong></a>
        </li>
    <?php } else {?>
		<li>
          <a href='<?php echo $seccion->children->first()->url ?>' style="color:#305B7C"><strong><?php echo $seccion->title ?></strong></a>
        </li>
<?php } ?>
<?php } ?>
     <!-- Antiguio menu contacto
      	<li>
          <a href='#contactModal' data-toggle='modal'>Contacto</a>
        </li>
      -->
       </ul>

<!-- Array que contiene las urls de las páginas en las que queramos que se muestre el submenú -->
<?php $paginas = array(
						"/servicios/servicios-ofrecidos/",
						"/servicios/campanas/",
            "/informacion-de-interes/noticias/",
						"/nosotros/equipo-profesional/",
						"/nosotros/instalaciones/",
						"/consulta/casos-clinicos/",
						"/informacion-de-interes/consejos/",
						"/informacion-de-interes/links-de-interes/",
						"/productos/productos-disponibles/",
						"/productos/promociones-especiales/",
            "/informacion-de-interes/articulos/",
            "/servicios/casos-clinicos/",
            "/informacion-de-interes/informacion-de-laboratorios/",
            "/informacion-de-interes/preguntas-frecuentes/",
            "/informacion-de-interes/consejos/",
            "/informacion-de-interes/noticias/",



            ) ?>         
        
  
    </div>
  </nav>
  	<?php if (in_array ($page->path,$paginas)) { ?>
    
	<ul class="portfolio-filtersmio text-center" style=" border-top: 1px solid #ddd !important; border-bottom: 1px solid #ddd !important; padding-top: 15px !important; list-style: none !important; margin-bottom: 30px !important; padding-bottom: 15px !important; ">
         
         <?php foreach($page->parent->children as $subseccion) { ?>
    		<li>
     		<a href='<?php echo $subseccion->url ?>'><strong><?php echo $subseccion->title ?></strong> <span style="color:orange"><strong>&nbsp|</strong></span></a>
   			</li>
   		 <?php } ?>
  		 </ul>
		 <?php
	
	} elseif ($page->name == "galeria") {?>
        
         <ul class="portfolio-filtersmio text-center" style=" border-top: 1px solid #87AABC !important; border-bottom: 1px solid #87AABC !important; padding-top: 15px !important; list-style: none !important; margin-bottom: 30px !important; padding-bottom: 15px !important; ">
        <i class="icon-chevron-right icon-large"></i>
        <?php foreach($page->children as $galeria) { ?>
    		<li>
      		<a href='<?php echo $galeria->url ?>'><strong><?php echo $galeria->title ?></strong> <span style="color:orange"><strong>&nbsp|</strong></span></a>
   			 </li>
  		<?php } ?><i class="icon-chevron-left icon-large"></i>
  		</ul>
  	<?php } else { ?>	
			

         
  		<?php } ?>
</div>

  </div>

  <div class='separator-shadow-bottom'>

      <img alt='' src='<?php echo $config->urls->templates?>assets/images/shadow-separator-wide-bottom.png'>   
  </div>  
  
  