<?php include("./myhead.inc"); ?>


<div class='container'>
 <div class='row bottom-margin'>

<div class="slogan">
    <h1>Nuestro equipo</h1>
    <h3>Conoce uno a uno a los integrantes de nuestro equipo profesional.</h3>
    <div class="slogan-buttons">
    </div>
  </div>

  <div class="col-md-12">  
        <div class="relative-w">
     <div class="frame-browser animated-when-visible animated bounceInRight" data-animation-type="bounceInRight">
            <div class="frame-buttons">
            <center></center>
            </div>
            <div class="frame-browser-image">
              <img src="<?php echo $config->urls->templates?>assets/images/equipo.jpg"></img>             
          </div>
        </div>
      </div>
    </div>
<div class="separator-shadow-bottom bottom-margin n">
<img alt="" src="/site/templates/assets/images/shadow-separator-wide-bottom.png">
</div>
<div class="separator-shadow-bottom bottom-margin n">
<img alt="" src="/site/templates/assets/images/shadow-separator-wide-bottom.png">
</div>
  <?php  foreach($page->children() as $empleado) {  ?>
    <div class='col-md-3'>
      <div class='team-member animated-when-visible' data-animation-type='bounceInUp' style="min-height:475px">
        <div class='member-avatar'>
          <a href="<?php echo $empleado->url; ?>"><img alt='' src='<?php echo $empleado->equipoImagen->url; ?>'></a>
        </div>
        <h3><?php echo $empleado->title; ?></h3>
        <p><?php echo $empleado->equipoCargo; ?></p>
        <div class='member-social'>
          <a href='https://www.facebook.com/pages/Hospital-Veterinario-Benipeixcar-Urgencias-24-horas-Valencia/331658603582158'>
            <i class='icon-facebook'></i>
          </a>
          <a href='#'>
            <i class='icon-twitter'></i>
          </a>
          <a href='mailto:hvbenipeixcar@gmail.com'>
            <i class='icon-envelope'></i>
          </a>
        </div>
      </div>
    </div>
    <?php } ?>  
</div>
</div>
<?php include("./myfoot.inc");  ?>
