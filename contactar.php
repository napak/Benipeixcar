<?php include("./myhead.inc"); ?>
<div class='container'>

<div class="slogan">
    <h1><?php echo $page->title ?></h1>
    <h2 class="header-lined2"></h2>
    <div class="slogan-buttons">
    </div>
  </div>
<div class="col-md-7">
	
  <div class="col-md-12">
      <div class="offer2 offer2-success" style="max-height:510px">
        <div class="shape">
          <div class="shape-text"> 
          <i class="icon-reorder icon-large"></i>       
          </div>
        </div>
        <div class="offer2-content">
          <h3 class="lead">
            Formulario de contacto:
          </h3>           
          <p>
         <?php echo $forms->embed('contactar'); ?>
          </p>
        </div>
      </div>
    </div>
	


</div>
<div class="container">
  <div class="row">
   
    <div class="col-md-4">
      <div class="offer offer-info">
        <div class="shape">
          <div class="shape-text"> 
          <i class="icon-time icon-large"></i>       
          </div>
        </div>
        <div class="offer-content">
          <h3 class="lead">
            Horario:
          </h3>           
          <p>
          LUNES A VIERNES DE:<br> <strong>09:00h</strong> a <strong>21:30h</strong><br><br>
          SÁBADOS DE: <br><strong>09:30h</strong> a <strong>14:30h</strong> 

          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="offer offer-warning">
        <div class="shape">
          <div class="shape-text">
            24h             
          </div>
        </div>
        <div class="offer-content">
          <h3 class="lead">
            Urgencias:
          </h3>           
          <p>
            
LUNES A VIERNES DE: <strong>21:30</strong> a <strong>09:00</strong><br>
SÁBADOS DE: <strong>14:30</strong> a <strong>00:00</strong><br>
DOMINGOS Y FESTIVOS: <strong>Todo el día</strong><br>
TELÉFONO URGENCIAS: <strong>96 348 30 98</strong>
            <br>
          </p>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="col-md-12">
      <div class="relative-w">
      

          <div class="frame-browser animated-when-visible animated bounceInRight" data-animation-type="bounceInRight">
            <div class="frame-buttons">
                <center>Hospital Veterinario Benipeixcar</center>
            </div>
            <div class="frame-browser-image">
<iframe width="100%" height="520px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Avenida+de+la+Constituci%C3%B3n,+68+bajo,+46009+Valencia&amp;aq=&amp;sll=39.487148,-0.377357&amp;sspn=0.008255,0.015943&amp;ie=UTF8&amp;hq=&amp;hnear=Av+de+la+Constituci%C3%B3n,+68,+46009+Val%C3%A8ncia,+Valencia&amp;ll=39.487151,-0.377355&amp;spn=0.008255,0.015943&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small></small>
		</div>
        </div>
    </div>

</div>
</div>

<?php include("./myfoot.inc");  ?>
