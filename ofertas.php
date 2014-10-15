<?php include("./myhead.inc"); ?>

<?php  foreach($page->children() as $oferta) {  ?>
<div class='container'>
  <div class='row post-loop'>
    <div class='col-md-2 col-md-offset-1'>
      <div class='post-loop-author-info'>
        <div class=''>
          <a href="<?php echo $oferta->url ?>"><img alt='' src='<?php echo $oferta->oferta_imagen->first()->url ?>' width="180px"><a href="">
        </div>
      </div>
    </div>
    <div class='col-md-8'>
      <div class='post-loop-content'>
        <h2 class='has-sub-header'>
          <a href='<?php echo $oferta->url ?>'><?php echo $oferta->title?></a>
        </h2>
        
        <p>
      <?php 
      //Función de extracción de texto
      $texto = $oferta->oferta_descripcion;
      $textoresumen = substr($texto,0,strrpos(substr($texto,0,250)," "));
      echo $textoresumen;
      
      ?>...
      <br><br>
      <strong>Fecha límite de validez:</strong> <?php echo $oferta->oferta_fecha_validez ?>&nbsp;<?php echo $oferta->oferta_fecha_validez2 ?>
        </p>
        
      </div>
    </div>
  </div>
 </div>
 
<?php }?>

<?php include("./myfoot.inc");  ?>