<?php include("./myhead.inc"); ?>

<?php  foreach($page->children() as $servicio) {  ?>
<div class='container'>
  <div class='row post-loop'>
    <div class='col-md-2 col-md-offset-1'>
      <div class='post-loop-author-info'>
        <div class=''>
           <a href="<?php echo $servicio->url ?>"><img alt='' src='<?php echo $servicio->images->first()->url ?>' width="180px"></a>
        </div>
      </div>
    </div>
    <div class='col-md-8'>
      <div class='post-loop-content'>
        <h2 class='has-sub-header'>
          <a href='<?php echo $servicio->url ?>'><?php echo $servicio->title?></a>
        </h2>
        
        <p>
			<?php 
			//Función de extracción de texto
			$texto = $servicio->body;
			$textoresumen = substr($texto,0,strrpos(substr($texto,0,250)," "));
			echo $textoresumen;
			
			?>...
        </p>
        
      </div>
    </div>
  </div>
 </div>
 
<?php }?>

<?php include("./myfoot.inc");  ?>
