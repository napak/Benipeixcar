<?php include("./myhead.inc"); ?>
<div class="container">
  <div class="row">
    <div class="col-md-2 col-md-offset-1">
      <div class="portfolio-single-image animated bounceInLeft">
        <img alt="" src="<?php echo $page->equipoImagen->url ?> ">
      </div>
    </div>
    <div class="col-md-9 ">
      <div class="portfolio-single-description">
        <h1><?php echo $page->title ?></h1>
        <div class="portfolio-single-tags">
<?php echo $page->equipoCargo ?>
        </div>
        <p><?php echo $page->body ?></p>
       
      </div>
    </div>
  </div>
  

</div>
<?php include("./myfoot.inc");  ?>      