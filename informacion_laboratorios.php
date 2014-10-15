<?php include("./myhead.inc"); ?>


<div class='container'>
  <h2 class='header-lined has-sub-header text-center'><?php echo $page->title ?></h2>
  <h4 class='sub-lined-header text-center'>Descubre de primera mano toda la informacion que nos proporcinan los laboratorios</h4>
  <div class='iconed-features style-2'>
    <div class='row'>
      <?php foreach($page->children as $tematica){ ?>
      
      <div class='col-md-4'>
        <div class="thumbnail">
        <div class='iconed-feature' href='#'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='feature-icon-w animated rollIn'>
                <a href="<?php echo $tematica->url ?>"><img alt='' src='<?php echo $tematica->tematica_imagen->first()->url ?>' width="180px"></a> 
              </div>
            </div>
            <div class='col-md-12'>
              <h4><a href='<?php echo $tematica->url ?>'><?php echo $tematica->title ?></a></h4> 
              <p>
              <?php 
              //Función de extracción de texto
              $texto = $tematica->tematica_descripcion;
              $textoresumen = substr($texto,0,strrpos(substr($texto,0,125)," "));
              echo $textoresumen;
      
      ?>...
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <?php } ?>

    </div>
    </div>
    </div>




<?php include("./myfoot.inc");  ?>